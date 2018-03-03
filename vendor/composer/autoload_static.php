<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1ea37a293ed0bd923eaae8b541b41e36
{
    public static $prefixLengthsPsr4 = array (
        'l' => 
        array (
            'loopers\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'loopers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/route',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1ea37a293ed0bd923eaae8b541b41e36::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1ea37a293ed0bd923eaae8b541b41e36::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
