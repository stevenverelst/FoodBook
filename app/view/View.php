<?php
namespace app\view;
use app\library\Util;

abstract class View
{
    protected static $_data;
    protected static $_controller;
    protected static $_view;

    public static function load(string $controller, string $view, $data = [])
    {
        self::$_controller = $controller;
        self::$_view=$view; 
        self::$_data = $data;
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
    public static function getData(string $param)
    {
        echo (self::$_data[$param]);
    }
    public static function setData(string $param, string $value)
    {
        self::$_data[$param] = $value;
    }
}
 