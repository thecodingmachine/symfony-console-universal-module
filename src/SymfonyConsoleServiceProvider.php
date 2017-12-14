<?php
namespace TheCodingMachine;


use Symfony\Component\Console\Application;
use Symfony\Component\Console\Helper\DebugFormatterHelper;
use Symfony\Component\Console\Helper\FormatterHelper;
use Symfony\Component\Console\Helper\HelperSet;
use Symfony\Component\Console\Helper\ProcessHelper;
use Symfony\Component\Console\Helper\QuestionHelper;
use TheCodingMachine\Funky\Annotations\Factory;
use TheCodingMachine\Funky\ServiceProvider;

class SymfonyConsoleServiceProvider extends ServiceProvider
{
    /**
     * Creates an helper set with default values from symfony/console
     *
     * @Factory()
     */
    public static function getHelperSet(Application $application): HelperSet
    {
        return $application->getHelperSet();
    }

    /**
     * @Factory()
     * @return Application
     */
    public static function getApplication(): Application
    {
        return new Application();
    }
}
