<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9e6ceeaff7988435eae127fee6fb9fed
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9e6ceeaff7988435eae127fee6fb9fed::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9e6ceeaff7988435eae127fee6fb9fed::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
