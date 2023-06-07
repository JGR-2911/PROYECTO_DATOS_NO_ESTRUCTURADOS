<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2aed5df1b2e342dfa9178e345283a2b0
{
    public static $files = array (
        '3a37ebac017bc098e9a86b35401e7a68' => __DIR__ . '/..' . '/mongodb/mongodb/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'PackageVersions\\' => 16,
        ),
        'O' => 
        array (
            'OzdemirBurak\\JsonCsv\\' => 21,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
            'MongoDB\\' => 8,
        ),
        'J' => 
        array (
            'Jean85\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'PackageVersions\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/package-versions-deprecated/src/PackageVersions',
        ),
        'OzdemirBurak\\JsonCsv\\' => 
        array (
            0 => __DIR__ . '/..' . '/ozdemirburak/json-csv/src',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'MongoDB\\' => 
        array (
            0 => __DIR__ . '/..' . '/mongodb/mongodb/src',
        ),
        'Jean85\\' => 
        array (
            0 => __DIR__ . '/..' . '/jean85/pretty-package-versions/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2aed5df1b2e342dfa9178e345283a2b0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2aed5df1b2e342dfa9178e345283a2b0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2aed5df1b2e342dfa9178e345283a2b0::$classMap;

        }, null, ClassLoader::class);
    }
}
