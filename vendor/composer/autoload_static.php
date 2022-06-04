<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6f87e2013527653c3826031fe9efdd7b
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Scngn\\Parasut\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Scngn\\Parasut\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6f87e2013527653c3826031fe9efdd7b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6f87e2013527653c3826031fe9efdd7b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6f87e2013527653c3826031fe9efdd7b::$classMap;

        }, null, ClassLoader::class);
    }
}
