<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit18c72a57e4b9bc673935b8146e07c9af
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Carbon_Fields\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Carbon_Fields\\' => 
        array (
            0 => __DIR__ . '/..' . '/htmlburger/carbon-fields/core',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit18c72a57e4b9bc673935b8146e07c9af::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit18c72a57e4b9bc673935b8146e07c9af::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit18c72a57e4b9bc673935b8146e07c9af::$classMap;

        }, null, ClassLoader::class);
    }
}