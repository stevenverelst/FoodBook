<?php
namespace app\business;

class ObjectErrors
{
    private $_objErrs;

    public function __construct(){
         $this->_objErrs = array();
    }

    public function getErrByName(string $errName):LogicError{
        foreach ($this->_objErrs as $obj) {
            if ($obj->getField() == $errName) {
                return $obj;
            }
        }
        return new LogicError('');;
    }

    public function initErrByName( string $errName){
        array_push($this->_objErrs, new LogicError($errName));
    }

    public function initErrByArray(array $errNames){
        foreach($errNames as $errName){
            $this->initErrByName($errName);
        }
    }

    public function setErr(LogicError $err):bool{ 
        $found =false;

        foreach($this->_objErrs as $obj){
            if ($obj->getField() == $err->getField()){
                $obj->setErr($err->getcode(), $err->getDescription());
                $found = true;
                break;
            }
        }
        return $found;
    }

}
 