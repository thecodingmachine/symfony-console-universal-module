<?php
namespace TheCodingMachine;


use Interop\Container\ContainerInterface;
use Interop\Container\ServiceProvider;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Helper\HelperSet;

class SymfonyConsoleServiceProvider implements ServiceProvider
{

    /**
     * Returns a list of all container entries registered by this service provider.
     *
     * - the key is the entry name
     * - the value is a callable that will return the entry, aka the **factory**
     *
     * Factories have the following signature:
     *        function(ContainerInterface $container, callable $getPrevious = null)
     *
     * About factories parameters:
     *
     * - the container (instance of `Interop\Container\ContainerInterface`)
     * - a callable that returns the previous entry if overriding a previous entry, or `null` if not
     *
     * @return callable[]
     */
    public function getServices()
    {
        return [
            HelperSet::class => function (ContainerInterface $container) {
                return new HelperSet();
            },
            Application::class =>function(ContainerInterface $container) {
                $console = new Application();
                $console->setHelperSet($container->get(HelperSet::class));
                return $console;
            }
        ];
    }
}