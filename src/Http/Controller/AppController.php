<?php
/**
 * Created by PhpStorm.
 * User: jimmy
 * Date: 08/04/16
 * Time: 2:26
 */

namespace Yanna\bts\Http\Controller;


use Doctrine\Common\Collections\ArrayCollection;
use Silex\Application;
use Silex\ControllerCollection;
use Silex\ControllerProviderInterface;
use Symfony\Component\Form\Extension\Core\ChoiceList\ChoiceList;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Yanna\bts\Domain\Entity\Site;
use Yanna\bts\Http\Form\loginForm;
use Yanna\bts\Domain\Entity\User;
//use Yanna\bts\Http\Form\UserForm;
use Yanna\bts\Domain\Services\userPasswordMatcher;
//use Yanna\bts\Domain\Services\UserServices;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Form;

class AppController implements ControllerProviderInterface
{
    private $app;

    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    public function connect(Application $app)
    {
        $controller = $app['controllers_factory'];

        $controller->get('/home', [$this, 'homeAction'])
            ->before([$this, 'checkUserRole'])
            ->bind('home');

        $controller->get('/createRawUser', [$this, 'createRawUserAction'])
            ->bind('createUser');

        $controller->get('/logout', [$this, 'logoutAction'])
            ->bind('logout');

        $controller->match('/login', [$this, 'loginAdminAction'])
            ->before([$this, 'checkUserRole'])
            ->bind('loginAdmin');

        $controller->match('/siteSelect', [$this, 'selectSiteAction'])
//            ->before([$this, 'checkUserEngineer'])
            ->bind('siteSelect');

        return $controller;
    }

    public function selectSiteAction(Request $request)
    {
        $infoSite = new Site();
        $infoAll = $this->app['site.repository']->findAll();
//        $form = $this->app['form.factory']->createBuilder('form', $infoSite)
//            ->add(
//                'siteId',
//                ChoiceType::class,
//                [
//                    'choices' => [$infoAll['siteId'],[$infoAll['siteName']]]
//                ]
//            )->add('save', 'submit')
//            ->getForm();


//        $infoSiteId = $infoSite->getSiteId();

//        return $this->app['twig']->render('Engineer/siteSelect.twig',['form' => $form->createView()]);
        return var_dump($infoSite);

    }

    public function checkUserEngineer(Request $request)
    {
        if ($request->getPathInfo() === '/siteSelect' && $this->app['session']->has('uname')) {
            return $this->app->redirect($this->app['url_generator']->generate('home'));
        }

        if (! ($this->app['session']->get('role') == 3) && ! ($request->getPathInfo() === '/siteSelect')) {
            return $this->app->redirect($this->app['url_generator']->generate('home'));
        }
    }

    public function checkUserRole(Request $request)
    {
        if ($request->getPathInfo() === '/login' && $this->app['session']->has('uname')) {
            return $this->app->redirect($this->app['url_generator']->generate('home'));
        }

        if (! $this->app['session']->has('uname') && ! ($request->getPathInfo() === '/login')) {
            $this->app['session']->getFlashBag()->add(
                'message_error',
                'Please Login First'
            );
            return $this->app->redirect($this->app['url_generator']->generate('loginAdmin'));
        }
    }

    public function homeAction()
    {
        return $this->app['twig']->render('home.twig');
    }

    public function createRawUserAction()
    {
        $informasi = User::create('dito yp','ditoyp','faster',3);

        $this->app['orm.em']->persist($informasi);
        $this->app['orm.em']->flush($informasi);

        return $this->app->redirect($this->app['url_generator']->generate('home'));
    }

    public function loginAdminAction(Request $request)
    {
        $loginForm = new LoginForm();

        $formBuilder = $this->app['form.factory']->create($loginForm, $loginForm);

        if ($request->getMethod() === 'GET') {
            return $this->app['twig']->render('login.twig', ['form' => $formBuilder->createView()]);
        }

        $formBuilder->handleRequest($request);

        if (! $formBuilder->isValid()) {
            return $this->app['twig']->render('login.twig', ['form' => $formBuilder->createView()]);
        }

        $user = $this->app['user.repository']->findByUsername($loginForm->getUsername());

        if ($user === null) {
            $this->app['session']->getFlashBag()->add(
                'message_error',
                'Username Incorrect'
            );
            return $this->app['twig']->render('login.twig', ['form' => $formBuilder->createView()]);
        }

        if (! (new UserPasswordMatcher($loginForm->getPassword(), $user))->match()) {
            $this->app['session']->getFlashBag()->add(
                'message_error',
                'Incorrect Username or Password given'
            );
            return $this->app['twig']->render('login.twig', ['form' => $formBuilder->createView()]);
        }

        $this->app['session']->set('role', ['value' => $user->getRole()]);
        $this->app['session']->set('uname', ['value' => $user->getUsername()]);
        $this->app['session']->set('name', ['value' => $user->getName()]);
        $this->app['session']->set('uid', ['value' => $user->getId()]);

        return $this->app->redirect($this->app['url_generator']->generate('home'));
    }

    public function logoutAction()
    {
        $this->app['session']->clear();

        return $this->app->redirect($this->app['url_generator']->generate('loginAdmin'));
    }

}