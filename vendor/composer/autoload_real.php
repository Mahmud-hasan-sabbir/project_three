<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitbe7c006f0d4a0d887d00286de5288e7d
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitbe7c006f0d4a0d887d00286de5288e7d', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitbe7c006f0d4a0d887d00286de5288e7d', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitbe7c006f0d4a0d887d00286de5288e7d::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
