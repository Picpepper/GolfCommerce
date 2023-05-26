<?php

namespace ContainerJxpQkxG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_6RE8XYService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.6_RE8XY' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.6_RE8XY'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManagerInterface' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
        ], [
            'entityManagerInterface' => '?',
            'slugger' => '?',
        ]);
    }
}
