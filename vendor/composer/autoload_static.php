<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitde0bd6871691c435f6268451ebeafc42
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sona\\Session\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sona\\Session\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitde0bd6871691c435f6268451ebeafc42::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitde0bd6871691c435f6268451ebeafc42::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitde0bd6871691c435f6268451ebeafc42::$classMap;

        }, null, ClassLoader::class);
    }
}
