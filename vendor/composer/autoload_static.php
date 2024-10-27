<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitef16226034c8aeb5143b781c9c60184d
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'ADCmdr\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ADCmdr\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitef16226034c8aeb5143b781c9c60184d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitef16226034c8aeb5143b781c9c60184d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitef16226034c8aeb5143b781c9c60184d::$classMap;

        }, null, ClassLoader::class);
    }
}