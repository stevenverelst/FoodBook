<?php
namespace app\business;

interface iBusinessObject
{
    public function jsonSerialize();
    public function getJSON(): string;

}
 