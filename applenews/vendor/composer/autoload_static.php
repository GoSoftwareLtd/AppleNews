<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit72a0d383fb147963484b5336a44650b6
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Curl\\' => 5,
            'ChapterThree\\AppleNewsAPI\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Curl\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-curl-class/php-curl-class/src/Curl',
        ),
        'ChapterThree\\AppleNewsAPI\\' => 
        array (
            0 => __DIR__ . '/..' . '/chapter-three/apple-news-api/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit72a0d383fb147963484b5336a44650b6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit72a0d383fb147963484b5336a44650b6::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
