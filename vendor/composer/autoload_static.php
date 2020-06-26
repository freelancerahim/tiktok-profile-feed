<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita9f916ca6829b1b46e97d75d8008db8c
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Inc\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Inc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita9f916ca6829b1b46e97d75d8008db8c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita9f916ca6829b1b46e97d75d8008db8c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}