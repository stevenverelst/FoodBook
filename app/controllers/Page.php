<?php 
namespace app\controllers;

use app\library\Util;
use app\library\Controller;
use app\models;

class Page extends Controller{
    private $_receptModel;

    public function __construct(){
        // Load Model  
    }

    public function index(){
        //$recept = $this->_receptModel->getRecept();

        // Set array with data

        $data = [
            'title' => 'Welcome to FoodBook',
            'description' =>  'This is the description of Foodbook'
        ];

        $this->view(Util::getClassName($this),'Index', $data);

        
    }

    public function about(){
     
       //$recept = $this->_receptModel->getRecept();

        // Set array with data
        
        $data = [
            'title' => 'About',
            'description' => 'Foodbook created by Steven Verelst',
            'version' => Util::getversion()
        ];

        $this->view(Util::getClassName($this),'About',  $data);

        
    }

}

?>