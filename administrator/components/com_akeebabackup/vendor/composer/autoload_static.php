<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfc6c498fdd2733741c21ace5f40590e0
{
    public static $files = array (
        '714ccd4b330431237faf946f71c4c9a4' => __DIR__ . '/..' . '/akeeba/s3/src/aliasing.php',
    );

    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\CaBundle\\' => 18,
        ),
        'A' => 
        array (
            'Akeeba\\WebPush\\' => 15,
            'Akeeba\\UsageStats\\Collector\\' => 28,
            'Akeeba\\S3\\' => 10,
            'Akeeba\\PHPFinder\\' => 17,
            'Akeeba\\Engine\\' => 14,
            'Akeeba\\Backup\\Tests\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\CaBundle\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/ca-bundle/src',
        ),
        'Akeeba\\WebPush\\' => 
        array (
            0 => __DIR__ . '/..' . '/akeeba/webpush/src',
        ),
        'Akeeba\\UsageStats\\Collector\\' => 
        array (
            0 => __DIR__ . '/..' . '/akeeba/stats_collector/src',
        ),
        'Akeeba\\S3\\' => 
        array (
            0 => __DIR__ . '/..' . '/akeeba/s3/src',
        ),
        'Akeeba\\PHPFinder\\' => 
        array (
            0 => __DIR__ . '/..' . '/akeeba/phpfinder/src',
        ),
        'Akeeba\\Engine\\' => 
        array (
            0 => __DIR__ . '/..' . '/akeeba/engine/engine',
        ),
        'Akeeba\\Backup\\Tests\\' => 
        array (
            0 => __DIR__ . '/../../../..' . '/Tests',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'PHPSQLParser\\' => 
            array (
                0 => __DIR__ . '/..' . '/greenlion/php-sql-parser/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfc6c498fdd2733741c21ace5f40590e0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfc6c498fdd2733741c21ace5f40590e0::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitfc6c498fdd2733741c21ace5f40590e0::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitfc6c498fdd2733741c21ace5f40590e0::$classMap;

        }, null, ClassLoader::class);
    }
}
