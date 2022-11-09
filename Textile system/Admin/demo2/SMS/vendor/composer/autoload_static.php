<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4374fd89b9b73957a2a24a43fa7065eb
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/src/Twilio',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4374fd89b9b73957a2a24a43fa7065eb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4374fd89b9b73957a2a24a43fa7065eb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4374fd89b9b73957a2a24a43fa7065eb::$classMap;

        }, null, ClassLoader::class);
    }
}
