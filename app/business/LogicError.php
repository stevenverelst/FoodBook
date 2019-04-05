<?php
    namespace app\business;

    class LogicError{
        private $_field;
        private $_code;
        private $_description;

        public function __construct(string $field=''){
            $this->_field = $field;
            $this->_code = 0;
            $this->_description ="";
        }

        public function setErr(int $code, string $description):void{
            $this->_code = $code;
            $this->_description = $description;
        }

        public function getcode():int{
            return $this->_code;
        }
        public function getField():string{
            return $this->_field;
        }

        public function getDescription():string{
            return $this->_description;
        }

    }