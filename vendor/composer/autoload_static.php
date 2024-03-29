<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3a329201dd52486f1b205bc48d0fbcb7
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Projeto\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Projeto\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit3a329201dd52486f1b205bc48d0fbcb7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3a329201dd52486f1b205bc48d0fbcb7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3a329201dd52486f1b205bc48d0fbcb7::$classMap;

        }, null, ClassLoader::class);
    }
}
