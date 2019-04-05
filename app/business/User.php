<?php
    namespace app\business;

use app\library\Util;

class User implements iBusinessObject{
    // Properies

    private $_userId;
    private $_name;
    private $_firstName;
    private $_email;
    private $_password;
    private $_confirmPassword;
    private $_address;

    public function __construct( string $userId = '', string $name ='', string $firstName ='', string $email ='',                    string $password = '', string $confirmPassword = ''){
        $this->setUserId($userId);
        $this->setName($name);
        $this->setFirstName($firstName);
        $this->setEmail($email);
        $this->setPassword($password);
        $this->setConfirmPassword($confirmPassword);
        $this->setAddress(new Address());
    }
    // Getters and setters

    public function setUserId(string $userId):void{
        $this->_userId = $userId;
    }

    public function getUserId():string{
        return $this->_userId;
    }

    public function setName(string $name):void{
        $this->_name = $name;
    } 

    public function getName():string{
        return $this->_name;
    }

    public function setFirstName(string $firstName):void{ 
   
         $this->_firstName = $firstName;
    }

    public function getFirstName():string {
   
         return $this->_firstName;
    }

    public function setEmail(string $email):void{ 
   
         $this->_email= $email;
    }

    public function getEmail():string {
   
         return $this->_email;
    }

    public function setPassword(string $password):void{ 
   
         $this->_password= $password;
    }

    public function getPassword():string {
   
         return $this->_password;
    }

    public function setConfirmPassword(string $confirmPassword):void{ 
         $this->_confirmPassword= $confirmPassword;
    }

    public function getConfirmPassword():string {
         return $this->_confirmPassword;
    }

    public function setAddress(Address $address): void
    {
        $this->_address = $address;
    }

    public function getAddress(): Address
    {
        return $this->_address;
    }

    public function getJSON():string{
        //Util::debugDump(Util::object2array(get_object_vars($this)), JSON_FORCE_OBJECT);
        return json_encode(Util::object2array(get_object_vars($this)));
        //return json_encode(Util::object2array(clone $this));
        //return json_encode(get_object_vars($this));
    }

    public function clone():self{
        return clone $this;
    }
}
?>