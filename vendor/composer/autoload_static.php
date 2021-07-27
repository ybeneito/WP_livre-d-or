<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd925f220e4560ad4baea78664690e20f
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MyGuestBook\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MyGuestBook\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'MyGuestBook\\Page' => __DIR__ . '/../..' . '/src/Page.php',
        'MyGuestBook\\Plugin' => __DIR__ . '/../..' . '/src/Plugin.php',
        'MyGuestBook\\Repository' => __DIR__ . '/../..' . '/src/Repository.php',
        'MyGuestBook\\Widget' => __DIR__ . '/../..' . '/src/Widget.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd925f220e4560ad4baea78664690e20f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd925f220e4560ad4baea78664690e20f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd925f220e4560ad4baea78664690e20f::$classMap;

        }, null, ClassLoader::class);
    }
}
