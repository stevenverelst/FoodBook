<?php
namespace app\library;
use app\view\View;
use app\business\iBusinessObject;

abstract Class Controller {
    //load model
    protected function model($model){
        if (file_exists('../app/models/' . $model . '.php')) {
            $model = 'app\\modes\\' . $model;
            return new $model;
        } else {
            // Model does not exist
            die('Model does not exist');
        }
    }

    //load view
    protected function view(string $name,string $view, iBusinessObject $data )
    {
        if(file_exists('../app/view/'. $name .'/'. ucwords($view).'.php')){
            $view = 'app\\view\\' .$name .'\\'. ucwords($view);
            Util::debugPrint_r('Controller: '.$name);
            Util::debugPrint_r('View hallo: '.$view);
            Util::debugDump($data->getJSON());
            $view::load(lcfirst($name), ucwords(Util::getClassNameByName($view)), $data->getJSON());
        }else{
            // View does not exist
            die('View does not exist');
        }

     
    }
}
?>