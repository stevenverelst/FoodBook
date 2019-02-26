<?php
namespace app\models;

interface iModel
{
    public function create();

    public function read();

    public function update();

    public function delete();
}
?>
