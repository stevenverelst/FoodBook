<?php
namespace app\library;
/**
 * User: steven
 * Date: 17-6-2018
 * Time: 20:28
 */
/**
 * Class Util
 * Deze klasse verzorgt de includes voor het project
 * @static string $_DATALAYER -> directory van data layer
 * @string string $_BUSINESSLAYER -> directory van business layer
 * @string string $_PRESENTATIONLAYER -> directory van presentatie layer
 * @string string $_UTILITY  -> directory van hulpprogramma's
 */
use  app\config\Config;

abstract class Util{
    // define cannot be set as private static
    //constant 
    //private static $_SITECONFIG = "../app/library/siteConfig.json";
    private static $_trace;
    private static $json_data;
    private static $dirs = array();   

    /**
     * Laad alle php files
     */
    /**
     * loadClasses
     *
     * @param  mixed $pref
     *
     * @return void
     */

    // public functions
    public static function debugPrint_r(string $message):void{
        
        if (Config::instance()->get("debugMode")){
            print_r($message.'<BR>');
        }
    }
    public static function debugDump($object) : void{
        if (Config::instance()->get("debugMode")) {
            var_dump($object);
        }
    }

    public static function getClassName(object $object):string{
        $object=get_class($object);
        if ($pos = strrpos($object, '\\')){
            return substr($object, $pos + 1);
        }else{
            return $pos;
        }
    }
    public static function getClassNameByName(string $class):string{
        
        if ($pos = strrpos($class, '\\')){
            return substr($class, $pos + 1);
        }else{
            return $pos;
        }
       }

    public static function getAppRoot():string{
        return dirname(dirname(__FILE__));
    }

    public static function getUrlRoot():string{
        return Config::instance()->get('URLRoot');
    }

    public static function getSiteName() : string{
        return Config::instance()->get('siteName');
    }

    public static function getDbHost(): string{
        return Config::instance()->get('dbHost');
    }

    public static function getDbName(): string{
        return Config::instance()->get('dbName');
    }

    public static function getDbPort(): string{
       return Config::instance()->get('dbPort');
    }

    public static function getDbUser():string{
        return Config::instance()->get('dbUser');
    }
    
    public static function getDbPassword() : string
    {
        return Config::instance()->get('dbPassword');
    }

    public static function getversion(): string
    {
        return Config::instance()->get('version');
    }
   
}
?>