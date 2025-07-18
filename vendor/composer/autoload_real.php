<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit5e29fe23fbcad5371927a789d43fa91f
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

        spl_autoload_register(array('ComposerAutoloaderInit5e29fe23fbcad5371927a789d43fa91f', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit5e29fe23fbcad5371927a789d43fa91f', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit5e29fe23fbcad5371927a789d43fa91f::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
