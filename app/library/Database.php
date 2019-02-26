<?php
    namespace app\library;
        /* 
        * PDO Database class
        * Connect to database
        * Create prepared statements
        * Bind values
        * Return rows and results
        */
    use app\library\Util;
    use PDO;

    class Database{
        private $_dns;
        private $_dbHandler;
        private $_stmt;
        private $_error;
        private $_options;
        
        public function __construct(){
            // to get all the drivers --> PDO::getAvailableDrivers();
            $this->_dns= 'mysql:host='. Util::getDbHost(). ';dbname=' . Util::getDbName() . ';port=' . Util::getDbPort();
            $options = array(
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );
            Util::debugPrint_r("Open DB");
            try{
                $this->_dbHandler = new PDO($this->_dns,Util::getDbUser(),Util::getDbPassword(),$this->_options);

            }catch(\PDOException $e){
                $this->_error= $e->getMessage();
                Util::debugPrint_r($this->_error);
            }
            
        }

        //prepare statement with query
        public function query(string $sql){
            $this->_stmt = $this->_dbHandler->prepare($sql);
        }

        // Bind values
        public function bind($param, $value, $type = null){
            if (is_null($type)){
                switch(true){
                    case is_int($value):
                        $type = PDO::PARAM_INT;
                    break;
                    case is_bool($value):
                        $type = PDO::PARAM_BOOL;
                        break;
                    case is_null($value):
                        $type = PDO::PARAM_NULL;
                        break;
                    default:
                        $type = PDO::PARAM_STR;
                }
            }
            $this->_stmt->bindValue($param, $value, $type);
        }

        // execute statement
        public function execute():bool{
            return $this->_stmt->execute();
        }

        // get result set as array of objects
        public function resultSet(){
            if($this->execute()){
                return $this->_stmt->fetchAll(PDO::FETCH_OBJ);
            }
        }


        // GEt single record
        public function single(){
            if($this->execute()){
                return $this->_stmt->fetch(PDO::FETCH_OBJ);
            }
        }

        // GHEt row count
        public function rowCount(){
            $this->_stmt->rowCount();
        }
    }
?>

  
        
    