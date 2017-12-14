<?php
namespace TheCodingMachine;


use Symfony\Component\Console\Application;
use Symfony\Component\Console\Helper\HelperSet;
use TheCodingMachine\Funky\Annotations\Factory;
use TheCodingMachine\Funky\ServiceProvider;

class SymfonyConsoleServiceProvider extends ServiceProvider
{
    /**
     * @Factory()
     * @return HelperSet
     */
    public static function getHelperSet(): HelperSet
    {
        return new HelperSet();
    }

    /**
     * @Factory()
     * @return Application
     */
    public static function getApplication(HelperSet $helperSet): Application
    {
        $console = new Application();
        $console->setHelperSet($helperSet);
        return $console;
    }
}
