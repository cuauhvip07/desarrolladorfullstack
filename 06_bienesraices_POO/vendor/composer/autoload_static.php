<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite01dd34dadb30be757be5250ea8be423
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/clases',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite01dd34dadb30be757be5250ea8be423::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite01dd34dadb30be757be5250ea8be423::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite01dd34dadb30be757be5250ea8be423::$classMap;

        }, null, ClassLoader::class);
    }
}
