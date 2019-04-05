<?php
namespace app\controllers;

use app\library\Util;
use app\library\Controller;
use app\business;

    class User extends Controller{
        private $_user;

        public function __constructor(){
            //$this->_user = new business\User();
        }

        public function register(){
            // check fotr post
            
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                //Process form
             }else{
                // Init data

                $this->_user = new business\User();
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
        } else {
            // Init data

            $this->_user = new business\User();
            //Load view
            //$this->view('users/register', $data);
            //$this->_user->
            $this->view(Util::getClassName($this), 'Login',  $this->_user);
        }
    }
    }



?>