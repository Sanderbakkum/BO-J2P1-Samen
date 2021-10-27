<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc8599e4f64e9299c649ed16637d3041f
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Website\\Controllers\\' => 20,
        ),
        'P' => 
        array (
            'Pecee\\' => 6,
        ),
        'L' => 
        array (
            'League\\Plates\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Website\\Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/_private/controllers',
        ),
        'Pecee\\' => 
        array (
            0 => __DIR__ . '/..' . '/pecee/simple-router/src/Pecee',
        ),
        'League\\Plates\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/plates/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc8599e4f64e9299c649ed16637d3041f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc8599e4f64e9299c649ed16637d3041f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc8599e4f64e9299c649ed16637d3041f::$classMap;

        }, null, ClassLoader::class);
    }
}