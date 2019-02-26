<?php
    namespace app\models;
    use app\library\Database;

    class Recept{
        private $_db;

        public function __construct(){
            $this->_db = new Database();
            
        }

        public function getRecept(){
            $this->_db->query("SELECT * FROM Recept");

            return $this->_db->resultSet();
        }
    }
?>