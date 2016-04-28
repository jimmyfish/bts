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
use Symfony\Component\HttpFoundation\Request;
use Yanna\bts\Domain\Entity\Site;
use Yanna\bts\Http\Form\loginForm;
use Yanna\bts\Domain\Entity\User;
//use Yanna\bts\Http\Form\UserForm;
use Yanna\bts\Domain\Services\userPasswordMatcher;
//use Yanna\bts\Domain\Services\UserServices;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Yanna\bts\Http\Form\siteForm;
use Yanna\bts\Http\Form\selectSiteForm;
use Yanna\bts\Http\Form\userForm;

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

        $controller->get('/error404',[$this,'errorPageAction'])
            ->bind('errorPage');

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

        $controller->match('/newUser',[$this,'newUserAction'])
            ->before([$this,'checkUserException'])
            ->bind('newInputUser');

        $controller->get('/listUser',[$this,'showAllUser'])
            ->bind('listUser');

        $controller->get('/delete/{id}',[$this,'deleteUserAction'])
            ->bind('deleteUser');

        $controller->match('/newSite',[$this,'newSiteAction'])
            ->bind('newInputSite');

        $controller->get('/listSite',[$this,'showAllSite'])
            ->bind('listSite');

        $controller->get('/formInstallation',[$this,'installationChecklistAction'])
            ->bind('installationChecklist');

        $controller->get('/formEnvirontment',[$this,'environtmentMonitoringAction'])
            ->bind('environmentMonitoring');

        $controller->get('/formOutdoor',[$this,'outdoorInstallationAction'])
            ->bind('outdoorInstallation');

        $controller->get('/btsForm',[$this,'btsFormAction'])
            ->bind('btsForm');

        $controller->get('/btsCommissioningForm',[$this,'btsCommissioningAction'])
            ->bind('btsCommissioning');

        $controller->get('/basicServiceForm',[$this,'basicServiceAction'])
            ->bind('btsService');

        $controller->get('/integrationTestForm',[$this,'integrationTestAction'])
            ->bind('integrationTest');

        $controller->get('/handoverTestInside',[$this,'handoverTestInsideAction'])
            ->bind('handoverTestInside');

        $controller->get('/handoverTestBetween',[$this,'handoverTestBetweenAction'])
            ->bind('handoverTestBetween');


        return $controller;
    }

    public function selectSiteAction(Request $request)
    {
        $selectSiteForm = new selectSiteForm();
        $form = $this->app['form.factory']->create($selectSiteForm, $selectSiteForm);

        $infoAll = $this->app['site.repository']->findAll();

        if ($request->getMethod() === 'GET') {
            return $this->app['twig']->render('Engineer/siteSelect.twig',['form' => $form->createView(), 'infoSite' => $infoAll]);
        }

        $form->handleRequest($request);

        if (! $form->isValid()) {
            return $this->app['twig']->render('Engineer/siteSelect.twig',['form' => $form->createView(), 'infoSite' => $infoAll]);
        }

        $this->app['session']->set('site', ['value' => $selectSiteForm->getSiteId()]);

//        return var_dump($infoSite);

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
        $informasi = User::create('yanna','yanna','faster',3);

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
        $this->app['session']->set('created', ['value' => $user->getCreatedAt()]);

        return $this->app->redirect($this->app['url_generator']->generate('home'));
    }

    public function logoutAction()
    {
        $this->app['session']->clear();

        return $this->app->redirect($this->app['url_generator']->generate('loginAdmin'));
    }

    public function checkUserException()
    {
        $infoRules = $this->app['session']->get('role');

        if($infoRules['value'] !== 0){
            return $this->app->redirect($this->app['url_generator']->generate('errorPage'));
        }
    }

    public function errorPageAction()
    {
        return $this->app['twig']->render('error404.twig');
    }

    public function newUserAction(Request $request)
    {
        $newUserForm = new UserForm();
        $formBuilder = $this->app['form.factory']->create($newUserForm, $newUserForm);

        if ($request->getMethod() === 'GET') {
            return $this->app['twig']->render('newUser.twig', ['form' => $formBuilder->createView()]);
        }

        $formBuilder->handleRequest($request);

        if (! $formBuilder->isValid()) {
            return $this->app['twig']->render('newUser.twig', ['form' => $formBuilder->createView()]);
        }

        $dataUser = User::create($newUserForm->getName(),$newUserForm->getUsername(),$newUserForm->getPassword(),$newUserForm->getRole());

        $this->app['orm.em']->persist($dataUser);
        $this->app['orm.em']->flush();

        $this->app['session']->getFlashBag()->add(
            'message_success',
            'Account Created Successfully'
        );
        return $this->app->redirect($this->app['url_generator']->generate('listUser'));

    }

    public function showAllUser()
    {
        $user = $this->app['user.repository']->findAll();
//        $infoUser = $this->app['session']->get('role');

        return $this->app['twig']->render('listUser.twig',['userList'=>$user]);
    }

    public function deleteUserAction()
    {
        $user = $this->app['user.repository']->findById($this->app['request']->get('id'));

        $this->app['orm.em']->remove($user);
        $this->app['orm.em']->flush();
        $this->app['orm.em']->getFlashBag->add(
            'Message_Success',
            'Account deleted Successfully'
        );

        return $this->app->redirect($this->app['url_generator']->generate('listUser'));
    }

    public function newSiteAction(Request $request)
    {
        $newSiteForm = new siteForm();
        $formBuilder = $this->app['form.factory']->create($newSiteForm, $newSiteForm);

        if ($request->getMethod() === 'GET') {
            return $this->app['twig']->render('newSite.twig', ['form' => $formBuilder->createView()]);
        }

        $formBuilder->handleRequest($request);

        if (! $formBuilder->isValid()) {
            return $this->app['twig']->render('newSite.twig', ['form' => $formBuilder->createView()]);
        }

        $dataSite = Site::create($newSiteForm->getRegional(),$newSiteForm->getPoc(),$newSiteForm->getProdef(),$newSiteForm->getSiteId(),$newSiteForm->getSiteName(),$newSiteForm->getTowerOwner(),$newSiteForm->getAddress(),$newSiteForm->getFop(),$newSiteForm->getSpv(),$newSiteForm->getLongitude(),$newSiteForm->getLatitude(),$newSiteForm->getExistingSystem(),$newSiteForm->getRemark(),$newSiteForm->getStats(),$newSiteForm->getSubcont());

        $this->app['orm.em']->persist($dataSite);
        $this->app['orm.em']->flush();

        $this->app['session']->getFlashBag()->add(
            'message_success',
            'Account Created Successfully'
        );
        return $this->app->redirect($this->app['url_generator']->generate('listSite'));
    }

    public function showAllSite()
    {
        $site = $this->app['site.repository']->findAll();
        $infoUser = $this->app['session']->get('role');

        return $this->app['twig']->render('listSite.twig',['siteList'=>$site,'infoUser'=>$infoUser]);
    }

    public function installationChecklistAction()
    {
        return $this->app['twig']->render('installationChecklistForm.twig');
    }

    public function environtmentMonitoringAction()
    {
        return $this->app['twig']->render('environtmentMonitoringForm.twig');
    }

    public function outdoorInstallationAction()
    {
        return $this->app['twig']->render('outdoorInstallationForm.twig');
    }

    public function btsFormAction()
    {
        return $this->app['twig']->render('Vd/btsForm.twig');
    }

    public function btsCommissioningAction()
    {
        return $this->app['twig']->render('Vd/btsCommissioningForm.twig');
    }

    public function basicServiceAction()
    {
        return $this->app['twig']->render('Vd/basicServicesForm.twig');
    }

    public function integrationTestAction()
    {
        return $this->app['twig']->render('Vd/integrationTestForm.twig');
    }

    public function handoverTestInsideAction()
    {
        return $this->app['twig']->render('Vd/handoverTestForm.twig');
    }

    public function handoverTestBetweenAction()
    {
        return $this->app['twig']->render('Vd/handoverTestBettweenForm.twig');
    }

}