<?php 
namespace app\controllers;

use app\library\Util;
use app\library\Controller;
use app\business;
use app\models;

class Page extends Controller{
    private $_page;
    private $_receptModel;

    public function __construct(){
        $this->_page = new business\Page();
    }

    public function index(){
        //$recept = $this->_receptModel->getRecept();

        // Set array with data
        $this->_page->setTitle('Welcome to FoodBook');
        $this->_page->setDescription('This is the description of Foodbook');
        $this->_page->setVersion('1.0.0');
        $this->view(Util::getClassName($this),'Index', $this->_page);

        
    }

    public function about(){
     
       //$recept = $this->_receptModel->getRecept();

        $this->_page->setTitle('About');
        $this->_page->setDescription( 'Foodbook created by Steven Verelst');
        $this->_page->setVersion('1.0.0');

        $this->view(Util::getClassName($this),'About',  $this->_page);

        
    }

}

?>