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
        
        if (Config::instance()->get("debugMode") && !Config::instance()->get("isProd")){
            print_r($message.'<BR>');
        }
    }
    public static function debugDump($object) : void{
        if (Config::instance()->get("debugMode") && !Config::instance()->get("isProd")) {
            var_dump($object);
        }
    }
    public static function trace(string $message): void
    {
        if (Config::instance()->get("trace") && !Config::instance()->get("isProd")) {
            $date = date('Ymd His');
            echo '<script> console.log("'.$date.'>>\t'. $message .'");</script>';
        }
    }
    /*public static function traceObject($object): void{
        if (Config::instance()->get("trace") && !Config::instance()->get("isProd")) {
            $date = date('Ymd His');
            //echo '<script> console.log("' . $date . '>>\t' . var_dump(get_object_vars($object)) . '");</script>';
            echo "<script> console.log('" . $date . ">>\t" . implode(get_object_vars($object)). "');</script>";
        }
    }*/

    public static function object2Array($object):array{
        self::trace("Util::function object2array(object)");
        self::debugPrint_r("Object2Array");
        
        $subArr = array();
        $arr = array();
        //$arr=array();
        if (is_object($object)){
            self::trace("is object");
            $arr = get_object_vars($object);
        }else{
            self::trace("is array");
            $arr = $object;
        }
        self::trace("before foreach");
        self::debugPrint_r( "before foreach");
        self::debugDump($object);
        self::debugDump($arr);
        foreach ($arr as $key => $value) {
            self::trace("get into foreach");
            if( is_array($value) || is_object($value)){
                self::trace("get into recurssion condition");
                $value = self::object2Array( get_object_vars($value));
            }else{
            self::trace($key . ": " . $value);
            $subArr[$key] = $value;
            }
            
        }
        self::trace( "End Util::function object2array(object)");
        return $subArr;
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
        return Config::instance()->get('PDO.dbHost');
    }

    public static function getDbName(): string{
        return Config::instance()->get('PDO.dbName');
    }

    public static function getDbPort(): string{
       return Config::instance()->get('PDO.dbPort');
    }

    public static function getDbUser():string{
        return Config::instance()->get('PDO.dbUser');
    }
    
    public
    static function getDbPassword() : string
    {
        return Config::instance()->get('PDO.dbPassword');
    }

    public static function getPdoPersistent(): string
    {
        return Config::instance()->get('PDO.ATTR_PERSISTENT');
    }

    public static function getPdoErrMode(): string
    {
        return Config::instance()->get('PDO.ATTR_ERRMODE');
    }

    public static function getversion(): string
    {
        return Config::instance()->get('version');
    }
   
}
?>