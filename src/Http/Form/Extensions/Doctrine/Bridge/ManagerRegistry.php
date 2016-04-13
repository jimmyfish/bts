<?php
/**
 * Created by PhpStorm.
 * User: jimmy
 * Date: 12/04/16
 * Time: 16:43
 */

namespace Yanna\bts\Http\Form\Extensions\Doctrine\Bridge;


use Doctrine\Common\Persistence\AbstractManagerRegistry;
use Silex\Application;

class ManagerRegistry extends AbstractManagerRegistry
{
    /**
     * @var Application
     */
    protected $container;

    protected function getService($name)
    {
        return $this->container[$name];

    }

    protected function resetService($name)
    {
        unset($this->container[$name]);

    }

    public function getAliasNamespace($alias)
    {
        throw new \BadMethodCallException('Namespace aliases not supported.');

    }

    public function setContainer(Application $container)
    {
        $this->container = $container['orm.em'];

    }
}