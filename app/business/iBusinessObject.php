<?php
namespace app\business;

interface iBusinessObject{

    public function loadData(array $data);

    public function getData():array;
}
?>
