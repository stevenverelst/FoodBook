<?php
namespace app\library;
    /*
     *  App core class
     *  Creates URL & loads core controller
     *  URL format is /Controller/method/params   
    */
    use app\library\Util;

    Class Core{
        private $_currentController = 'app\\controllers\\Page';
        private $_currentMethod = 'index';
        private $_params = [];
        
        public function __construct(){
            $controller = '';
            $url = $this->getUrl();


            // set controller via factory pattern
            if(file_exists(('../app/controllers/'. ucwords($url[0]).'.php'))){
                
                $this->_currentController = 'app\\controllers\\' . ucwords($url[0]);
            }
            // unset current index
            unset($url[0]);
            // instantiate controller class
            $this->_currentController = new $this->_currentController();

            // checks on method and set method
            if (isset($url[1])){
                // CHeck if method exists in controller
                if (method_exists($this->_currentController, $url[1])){
                    $this->_currentMethod =$url[1];
                }
                
                unset($url[1]);
            }

            //check on parameters
            $this->_params = $url?array_values($url):[];
            
            // Call a callback with aaray of params
            call_user_func_array([$this->_currentController,$this->_currentMethod],$this->_params);

        }
        public function getUrl(){
            if (isset($_GET['url'])){
                // remove ending /
                $url = rtrim($_GET['url'],"/");
                // remove illegal character
                $url = filter_var($url, FILTER_SANITIZE_URL);
                Util::debugPrint_r($url);
                return explode('/',$url);
            }
            
        }

        public function setController (ViewController $controller){
            $this->_currentController= $controller;
        }

    public function getController()
    {
        return $this->_currentController;
    }

    }

?>