<?php

namespace Container56xuhhX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrineMigrations_SyncMetadataCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine_migrations.sync_metadata_command' shared service.
     *
     * @return \Doctrine\Migrations\Tools\Console\Command\SyncMetadataCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/SyncMetadataCommand.php';

        $container->privates['doctrine_migrations.sync_metadata_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\SyncMetadataCommand(($container->privates['doctrine.migrations.dependency_factory'] ?? $container->load('getDoctrine_Migrations_DependencyFactoryService')), 'doctrine:migrations:sync-metadata-storage');

        $instance->setName('doctrine:migrations:sync-metadata-storage');

        return $instance;
    }
}
