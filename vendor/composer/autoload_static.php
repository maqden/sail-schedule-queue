<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit555a3df7798869e1493d2e34652b7b24
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit555a3df7798869e1493d2e34652b7b24::$classMap;

        }, null, ClassLoader::class);
    }
}
