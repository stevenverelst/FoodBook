<?php
namespace app\controllers;

use app\library\Util;
use app\library\Controller;
use app\business;

class User extends Controller{
        private $_user;


        public function __construct(){
            Util::trace("User->contructor");
            $this->_user = new business\User();
        }

        public function register(){
            // check for post method
            // Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                //Process form
                $this->_user->setUserId($_POST['userId']);
                $this->_user->setName($_POST['name']);
                $this->_user->setFirstName($_POST['firstName']);
                $this->_user->setEmail($_POST['email']);
                $this->_user->setPassword($_POST['password']);
                $this->_user->setConfirmPassword($_POST['confirmPassword']);
                $country = new business\Country(0,'','');
                $this->_user->setAddress( new business\Address(0, $_POST['street'], $_POST[ 'houseNumber'],$_POST['bus'], $_POST['zipcode'], $_POST['city']), new business\Country(0,$_POST['countryCode']));
                

             }else{
                // Init data

                //$this->_user = new business\User();
                //Load view
                //$this->view('users/register', $data);
                //$this->_user->
                $this->view(Util::getClassName($this),'Register',  $this->_user);
             } 
        }

    public function login()
    {
        // check for post

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Process form
            $this->_user = new User(0,'','','','','','');

            
        } else {
            // Init data

            //$this->_user = new business\User();
            //Load view
            //$this->view('users/register', $data);
            //$this->_user->
            $this->view(Util::getClassName($this), 'Login',  $this->_user);
        }
    }
    }



?>