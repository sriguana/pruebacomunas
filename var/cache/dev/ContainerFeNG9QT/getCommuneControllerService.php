<?php

namespace ContainerFeNG9QT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCommuneControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\CommuneController' shared autowired service.
     *
     * @return \App\Controller\CommuneController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/CommuneController.php';

        $container->services['App\\Controller\\CommuneController'] = $instance = new \App\Controller\CommuneController();

        $instance->setContainer(($container->privates['.service_locator.0ghLsew'] ?? $container->load('get_ServiceLocator_0ghLsewService'))->withContext('App\\Controller\\CommuneController', $container));

        return $instance;
    }
}
