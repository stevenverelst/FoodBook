<?php
namespace app\view;
use app\library\Util;

abstract class View
{
    protected static $_data;
    protected static $_controller;
    protected static $_view;

    public static function load(string $controller, string $view, string $data)
    {
        Util::debugPrint_r('View:load');
        Util::debugDump($data);
        
        self::$_controller = $controller;
        self::$_view=$view; 
        self::$_data = json_decode($data, true);
        Util::debugDump(self::$_data);
        self::build();
    }

    public static function build()
    {
        self::writeHeader();
        self::writeBody();
        self::writeFooter();
    }
    // functions to build your pages.

    public static function writeBody()
    {
        Util::debugPrint_r('ClassName:'.__CLASS__);
        Util::debugPrint_r('Controller:'.self::$_controller);
        Util::debugPrint_r('view name:'. self::$_view);
        Util::debugPrint_r('App Root:'. Util::getAppRoot());
        require Util::getAppRoot() . '\\view\\' . self::$_controller .'\\'. self::$_view . 'Body.php';
    }

    public static function writeHeader()
    {
        require Util::getAppRoot() . '/view/inc/header.php';
    }

    public static function writeFooter()
    {
        require Util::getAppRoot() . '/view/inc/footer.php';
    }
    public static function getData(string $key)
    {
        Util::trace($key.": ". self::$_data[$key]);
        echo (self::$_data[$key]);
    }
    public static function getSubData(array $keys)
    {
        //echo $list['address']->['street'];
        $key = '';
        $list = self::$_data;
        Util::trace("View::function getSubData(array)");
        Util::debugPrint_r('array is:');
        Util::debugDump($keys);

        for ($i = 0; $i < sizeof($keys); $i++) {
            $key = $keys[$i];
            Util::trace('key: ' . $keys[$i] . '->');
            if ($i < sizeof($keys) - 1) {
                $list = json_decode($list[$key], true);
            }
        }
            echo ($list[$key]);
    }


    public static function setData(string $param, string $value)
    {
        self::$_data[$param] = $value;
    }
}
 