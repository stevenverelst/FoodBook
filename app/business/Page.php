<?php
    namespace app\business;

    use app\library\Util;

class Page implements iBusinessObject{

    private $_title;
    private $_description;
    private $_version;
       
    public function __construct(string $title = '', string $description = '', string $version = ''){
        $this->setTitle($title);
        $this->setDescription($description);
        $this->setVersion($version);
    }

    public function getTitle():string{
        return $this->_title;
    }

    public function setTitle(string $title):void{
        $this->_title = $title;
    }

    public function getDescription():string{
        return $this->_description;
    }

    public function setDescription(string $description):void{
        $this->_description = $description;
    }

    public function getVersion():string{
        return $this->_version;
    }

    public function setVersion(string $version):void{
        $this->_version= $version;
    }
    public function jsonSerialize(){
        return[
            'title' => $this->_title,
            'description' => $this->_description,
            'version' => $this->_version
        ];
    }
    public function getJSON():string {
        
        return json_encode(get_object_vars($this));
    }

}
?>