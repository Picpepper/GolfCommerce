<?php

namespace Container56xuhhX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UFLuQIIService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.UFLuQII' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.UFLuQII'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\FavorisController::ajouterAuxFavoris' => ['privates', '.service_locator.ZJzZ1Z2', 'get_ServiceLocator_ZJzZ1Z2Service', true],
            'App\\Controller\\FavorisController::supprimerDesFavoris' => ['privates', '.service_locator.ZJzZ1Z2', 'get_ServiceLocator_ZJzZ1Z2Service', true],
            'App\\Controller\\ProduitController::AjoutProduits' => ['privates', '.service_locator.6_RE8XY', 'get_ServiceLocator_6RE8XYService', true],
            'App\\Controller\\ProduitController::proshop' => ['privates', '.service_locator.SRtF.2R', 'get_ServiceLocator_SRtF_2RService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.wOdllM6', 'get_ServiceLocator_WOdllM6Service', true],
            'App\\Controller\\RegistrationController::verifyUserEmail' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Controller\\FavorisController:ajouterAuxFavoris' => ['privates', '.service_locator.ZJzZ1Z2', 'get_ServiceLocator_ZJzZ1Z2Service', true],
            'App\\Controller\\FavorisController:supprimerDesFavoris' => ['privates', '.service_locator.ZJzZ1Z2', 'get_ServiceLocator_ZJzZ1Z2Service', true],
            'App\\Controller\\ProduitController:AjoutProduits' => ['privates', '.service_locator.6_RE8XY', 'get_ServiceLocator_6RE8XYService', true],
            'App\\Controller\\ProduitController:proshop' => ['privates', '.service_locator.SRtF.2R', 'get_ServiceLocator_SRtF_2RService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.wOdllM6', 'get_ServiceLocator_WOdllM6Service', true],
            'App\\Controller\\RegistrationController:verifyUserEmail' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
        ], [
            'App\\Controller\\FavorisController::ajouterAuxFavoris' => '?',
            'App\\Controller\\FavorisController::supprimerDesFavoris' => '?',
            'App\\Controller\\ProduitController::AjoutProduits' => '?',
            'App\\Controller\\ProduitController::proshop' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\RegistrationController::verifyUserEmail' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\FavorisController:ajouterAuxFavoris' => '?',
            'App\\Controller\\FavorisController:supprimerDesFavoris' => '?',
            'App\\Controller\\ProduitController:AjoutProduits' => '?',
            'App\\Controller\\ProduitController:proshop' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\RegistrationController:verifyUserEmail' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
