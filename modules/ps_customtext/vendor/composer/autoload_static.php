<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit42f62163057f26d1a210cb6caf9bcc6d
{
    public static $classMap = array (
        'CustomText' => __DIR__ . '/../..' . '/classes/CustomText.php',
        'MigrateData' => __DIR__ . '/../..' . '/classes/MigrateData.php',
        'Ps_Customtext' => __DIR__ . '/../..' . '/ps_customtext.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit42f62163057f26d1a210cb6caf9bcc6d::$classMap;

        }, null, ClassLoader::class);
    }
}
