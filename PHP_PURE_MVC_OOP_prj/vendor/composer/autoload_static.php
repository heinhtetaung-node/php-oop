<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4fba8a37070aa2cb5a38da90b0f71b61
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Models\\' => 7,
        ),
        'C' => 
        array (
            'Controllers\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Models',
        ),
        'Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Controllers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4fba8a37070aa2cb5a38da90b0f71b61::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4fba8a37070aa2cb5a38da90b0f71b61::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4fba8a37070aa2cb5a38da90b0f71b61::$classMap;

        }, null, ClassLoader::class);
    }
}
