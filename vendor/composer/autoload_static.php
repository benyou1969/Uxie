<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit23088874fbcf14c7e3c26102bb30d248
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'config\\' => 7,
        ),
        'R' => 
        array (
            'Router\\' => 7,
        ),
        'M' => 
        array (
            'Models\\' => 7,
        ),
        'C' => 
        array (
            'Controllers\\' => 12,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'config\\' => 
        array (
            0 => __DIR__ . '/../..' . '/config',
        ),
        'Router\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Router',
        ),
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Models',
        ),
        'Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Controllers',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit23088874fbcf14c7e3c26102bb30d248::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit23088874fbcf14c7e3c26102bb30d248::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
