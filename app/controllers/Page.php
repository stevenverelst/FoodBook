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
        $recept = $this->_receptModel->getRecept();

        // Set array with data

        $data = [
            'title' => 'Welcome'
        ];

        $this->view(Util::getClassName($this),'index', $data);

        
    }

    public function about(){
        $this->view(Util::getClassName($this), 'about');
    }

}

?>