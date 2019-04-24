<?php
    namespace app\business;

use app\library\Util;

class User implements iBusinessObject, \JsonSerializable{
    // Properies
    private $_id;
    private $_userId;
    private $_name;
    private $_firstName;
    private $_email;
    private $_password;
    private $_confirmPassword;
    private $_address;

    public function __construct(){
        $this->_id = 0;
        $this->_userId = '';
        $this->_name = '';
        $this->_firstName = '';
        $this->_email = '';
        $this->_password = '';
        $this->_confirmPassword = '';
        $this->_address = new Address();
    }
    // Getters and setters

    public function setId(int $id): void{
        $this->_id = $id;
    }

    public function getId(): int{
        return $this->_id;
    }

    public function setUserId(string $userId =''):LogicError{
        $err = new LogicError('userId');
        Util::trace('user->setUserId');
        // Check userId if empty
        if ($userId === ''){
            $err->setErr(1,"Cannot be empty.");
        }
        // Check if userId is not in use when new user(Id=0)
        $this->_userId = trim($userId);
        return $err;
    }

    public function getUserId():string{
        return $this->_userId;
    }

    public function setName(string $name):LogicError{
        $err = new LogicError('name');
        Util::trace('user->setName');
        // Check name if empty
        if ($name === '') {
            $err->setErr(1, "Cannot be empty.");
        }
        $this->_name = trim($name);
        return $err;
    } 

    public function getName():string{
        return $this->_name;
    }

    public function setFirstName(string $firstName):LogicError{
        $err = new LogicError('firstName');
        Util::trace('user->setFirstName');
         // Check firstName if empty
        if ($firstName === '') {
            $err->setErr(1, "Cannot be empty.");
        }
         $this->_firstName = trim($firstName);
        return $err;
    }

    public function getFirstName():string {
   
         return $this->_firstName;
    }

    public function setEmail(string $email):LogicError{
        $err = new LogicError('email');
        Util::trace('user->setEmail');
        // Check e-mail if empty
        if ($email === '') {
            $err->setErr(1, "Cannot be empty.");
        }
        //check email has @ and has a dot

         $this->_email= trim($email);
        return $err;
    }

    public function getEmail():string {
   
         return $this->_email;
    }

    public function setPassword(string $password):LogicError{
        $err = new LogicError('password');
        Util::trace( 'user->setPassword');
        // Check if password is not empty
        if ($password === '') {
            $err->setErr(1, "Cannot be empty.");
        }
        // Check if password is valid
         $this->_password= trim($password);
        return $err;
    }

    public function getPassword():string {
   
         return $this->_password;
    }

    public function setConfirmPassword(string $confirmPassword):LogicError{
        $err = new LogicError('confirmPassword');
        Util::trace('user->setConfirmPassword');
        // Check if confirm password is not empty
        if ( $confirmPassword === '') {
            $err->setErr(1, "Cannot be empty.");
        }
        // Check if confirm password is identical to _password
        if ($confirmPassword !== $this->_password) {
            $err->setErr(2, "Is different then paassword.");
        }
        $this->_confirmPassword = trim($confirmPassword);
        return $err;
        
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

    public function jsonSerialize(){
        return [
            'id' => $this->_id,
            'userId'=>$this->_userId,
            'name'=>$this->_name,
            'firstName'=>$this->_firstName,
            'email'=>$this->_email,
            'password'=>$this->_password,
            'confirmPassword'=>$this->_confirmPassword,
            'address'=>json_encode($this->_address)
        ];
     
    }

    public function getJSON():string{
        //Util::debugDump(Util::object2array(get_object_vars($this)), JSON_FORCE_OBJECT);
        //return json_encode(Util::object2array(get_object_vars($this)));
        //return json_encode(Util::object2array(clone $this));
        return json_encode($this);
    }

}
?>