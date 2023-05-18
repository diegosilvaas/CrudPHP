<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit3f3158f8ee1a999e4e1dfe05c98c30ea
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit3f3158f8ee1a999e4e1dfe05c98c30ea', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit3f3158f8ee1a999e4e1dfe05c98c30ea', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit3f3158f8ee1a999e4e1dfe05c98c30ea::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
