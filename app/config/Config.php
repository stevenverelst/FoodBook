<?php
namespace app\config;

class Config{

    private static $_SITECONFIG = "../app/config/siteConfig.json";
    private static $_instance;
    private $_values = [];

   private function __construct(){}

    // public functions
    public static function instance():self
    {
        if (is_null(self::$_instance)){
            self::$_instance = new self();
            self::$_instance->loadClasses();
        }
            return self::$_instance;
    }

    public function get($name)
    {
        if(isset($this->_values[$name])){
            return $this->_values[$name];
        }else{
            return null;
        }
    }

    private function set($name, $value)
    {
        $this->_values[$name] =$value;
    }

    private function loadClasses() : void
    {
        if (!self::loadJSONData()) {
            Util::debugPrint("Error when loading config file");
        }
    }

    public static function getConfigFileName() : string
    {
        return self::$_SITECONFIG;
    }

    // private function

    private static function loadJSONData() : bool
    {
        $json = file_get_contents(self::$_SITECONFIG);
        if ($json === "FALSE") {
            return false;
        } else {
            $json_data = json_decode($json)->config;
            //var_dump($json_data);
            foreach ($json_data as $key => $value){
                
                self::$_instance->set($key,$value);
            }
            return true;
        }

    }

}

?>