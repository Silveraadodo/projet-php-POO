<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitf96f23b1f95c0f1493720ac475caa460
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

        spl_autoload_register(array('ComposerAutoloaderInitf96f23b1f95c0f1493720ac475caa460', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitf96f23b1f95c0f1493720ac475caa460', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitf96f23b1f95c0f1493720ac475caa460::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
