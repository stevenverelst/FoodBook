<?php
namespace app\views;

interface iView
{
    public function create();

    public function read();

    public function update();

    public function delete();
}
?>