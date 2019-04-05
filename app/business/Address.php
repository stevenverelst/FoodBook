<?php
namespace app\business;

class Address implements iBusinessObject
{
    private $_street;
    private $_number;
    private $_bus;
    private $_zipcode;
    private $_city;
    private $_country;

    public function __construct(string $street='', string $number='', string $bus='', string $zipcode ='',
                                string $city='', $country=''){
        $this->setStreet($street);
        $this->setNumber($number);
        $this->setBus($bus);
        $this->setZipcode($zipcode);
        $this->setCity($city);
        $this->setCountry($country);
    }

    public function setStreet(string $street):void{
        $this->_street= $street;
    }

    public function getStreet():string{
        return $this->_street;
    }

    public function setNumber(string $number):void{
        $this->_number = $number;
    }

    public function getNumber():string{
        return $this->_number;
    }

    public function setBus(string $bus): void
    {
        $this->_bus = $bus;
    }

    public function getBus(): string
    {
        return $this->_Bus;
    }

    public function setZipcode(string $zipcode): void
    {
        $this->_zipcode = $zipcode;
    }

    public function getZipcode(): string
    {
        return $this->_zipcode;
    }

    public function setCity(string $city): void
    {
        $this->_city = $city;
    }

    public function getCity(): string
    {
        return $this->_city;
    }

    public function setCountry(string $country): void
    {
        $this->_country = $country;
    }

    public function getCountry(): string
    {
        return $this->_country;
    }
    public function getJSON(): string
    {
        return json_encode(get_object_vars($this));
    }
}
?>