<?php
namespace app\library;

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
    protected function view(string $name,string $view, $data = [])
    {

        if(file_exists('../app/views/'. $name .'/'. ucwords($view).'.php')){
            $view = 'app\\views\\' .$name .'\\'. ucwords($view);
            $view::load($data);
        }else{
            // View does not exist
            die('View does not exist');
        }

     
    }
}
?>