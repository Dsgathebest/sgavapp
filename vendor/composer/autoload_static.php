<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1fcd062611ea9d40bfc836100109f486
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Models\\' => 7,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/models',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/config',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1fcd062611ea9d40bfc836100109f486::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1fcd062611ea9d40bfc836100109f486::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1fcd062611ea9d40bfc836100109f486::$classMap;

        }, null, ClassLoader::class);
    }
}
