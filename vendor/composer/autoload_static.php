<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1caf587fe390a0f586cffa8fed3e8294
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

    public static $classMap = array (
        'app\\business\\iBusinessObject' => __DIR__ . '/../..' . '/app/business/iBusinessObject.php',
        'app\\config\\Config' => __DIR__ . '/../..' . '/app/config/Config.php',
        'app\\controllers\\Page' => __DIR__ . '/../..' . '/app/controllers/Page.php',
        'app\\controllers\\User' => __DIR__ . '/../..' . '/app/controllers/User.php',
        'app\\library\\Controller' => __DIR__ . '/../..' . '/app/library/Controller.php',
        'app\\library\\Core' => __DIR__ . '/../..' . '/app/library/Core.php',
        'app\\library\\Database' => __DIR__ . '/../..' . '/app/library/Database.php',
        'app\\library\\Util' => __DIR__ . '/../..' . '/app/library/Util.php',
        'app\\models\\Recept' => __DIR__ . '/../..' . '/app/models/Recept.php',
        'app\\models\\iModel' => __DIR__ . '/../..' . '/app/models/iModel.php',
        'app\\models\\model' => __DIR__ . '/../..' . '/app/models/model.php',
        'app\\view\\View' => __DIR__ . '/../..' . '/app/view/View.php',
        'app\\view\\page\\About' => __DIR__ . '/../..' . '/app/view/page/About.php',
        'app\\view\\page\\Index' => __DIR__ . '/../..' . '/app/view/page/Index.php',
        'app\\view\\user\\Register' => __DIR__ . '/../..' . '/app/view/user/Register.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1caf587fe390a0f586cffa8fed3e8294::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1caf587fe390a0f586cffa8fed3e8294::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1caf587fe390a0f586cffa8fed3e8294::$classMap;

        }, null, ClassLoader::class);
    }
}
