<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit82d77049c6d8b5d9d20d89f367f40b16
{
    public static $files = array (
        '22485ad0236baf5f230e92ee2873f855' => __DIR__ . '/../..' . '/app/helpers/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit82d77049c6d8b5d9d20d89f367f40b16::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit82d77049c6d8b5d9d20d89f367f40b16::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit82d77049c6d8b5d9d20d89f367f40b16::$classMap;

        }, null, ClassLoader::class);
    }
}
