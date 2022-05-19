<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2ec2857fce79d051c1e19e80c7b8c433
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\Models\\' => 11,
            'App\\Exceptions\\' => 15,
            'App\\Core\\' => 9,
            'App\\Controllers\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/models',
        ),
        'App\\Exceptions\\' => 
        array (
            0 => __DIR__ . '/../..' . '/exceptions',
        ),
        'App\\Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'App\\Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/controllers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2ec2857fce79d051c1e19e80c7b8c433::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2ec2857fce79d051c1e19e80c7b8c433::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2ec2857fce79d051c1e19e80c7b8c433::$classMap;

        }, null, ClassLoader::class);
    }
}