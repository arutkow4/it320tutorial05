<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite55c1a2a66fa4bfb54b02ad00e46cad1
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Ctype\\' => 23,
        ),
        'D' => 
        array (
            'Dotenv\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/phpdotenv/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite55c1a2a66fa4bfb54b02ad00e46cad1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite55c1a2a66fa4bfb54b02ad00e46cad1::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
