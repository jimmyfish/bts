<?php
/**
 * Created by PhpStorm.
 * User: jimmy
 * Date: 08/04/16
 * Time: 2:26
 */

namespace Yanna\bts\Http\Controller;


use Silex\Application;
use Silex\ControllerProviderInterface;
use Silex\ControllerCollection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\Request;
use Yanna\bts\Domain\Entity\User;

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
            ->bind('home');

        $controller->get('/createRawUser', [$this, 'createRawUserAction'])
            ->bind('createUser');

        return $controller;
    }

    public function homeAction()
    {
        return $this->app['twig']->render('home.twig');
    }

    public function createRawUserAction()
    {
        $informasi = User::create('dito','ditolaksono','faster',0);

        $this->app['orm.em']->persist($informasi);
        $this->app['orm.em']->flush($informasi);

        return $this->app->redirect($this->app['url_generator']->generate('home'));
    }
}