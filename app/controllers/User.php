<?php
namespace app\controllers;

use app\library\Util;
use app\library\Controller;

    class User extends Controller{
        public function __constructor(){

        }

        public function register(){
            // check fotr post
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                //Process form
             }else{
                 // Init data
                 $data= [
                    'name' => '',
                    'email' => '',
                    'password' => '',
                    'confirm_password' => '',
                    'name_err' => '',
                    'email_err' => '',
                    'password_err' => '',
                    'confirm_password_err' =>''
                 ];

                 //Load view
                 //$this->view('users/register', $data);
                $this->view(Util::getClassName($this),'Register',  $data);
             } 

        }
    }



?>