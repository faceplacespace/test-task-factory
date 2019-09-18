<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit658df51b5cbd2d135e58eee75081172f
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit658df51b5cbd2d135e58eee75081172f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit658df51b5cbd2d135e58eee75081172f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
