<?php
/** 
*   @author Steven Verelst
*   @version 0.0.1
*   @package app\business
*/
namespace app\business;

/**
 * Class Address implements from the interfaces iBusinessObject and JsonSerializable
 * 
 * This class handles the busness functtion of an address
 * @property int $_id -> Primary Key column ID of the table address
 * @property string $_street -> street name 
 * @property string $_number -> house or building number can be numeric or alpha numeric eg 10 or 12B
 * @property string $_box-> mail box if an appartement
 * @property string $_zipcode-> postal code of city or village
 * @property string $_city-> Name city or village
 * @property Country $_country-> object of country. 
 * 
 */
class Address implements iBusinessObject, \JsonSerializable
{
    private $_id;
    private $_street;
    private $_number;
    private $_box;
    private $_zipcode;
    private $_city;
    private $_country;


    public function __construct(){
        $this->_id = 0;
        $this->_street = '';
        $this->_number = '';
        $this->_box = '';
        $this->_zipcode = '';
        $this->_city = '';
        $this->_country = new Country();
    }

    /**
     * @param int $id -> Primary Key column ID of the table address
     */
    public function setId(int $id): void{
        $this->_id = $id;
    }

    /**
     * @return int $_Id -> Primary Key column ID of the table address
     */
    public function getId(): int{
        return $this->_id;
    }

    /**
     * @param string $street -> street name
     */
    public function setStreet(string $street):void{
        $this->_street= trim($street);
    }

    /**
     * @return string $_street -> street name
     */
    public function getStreet():string{
        return $this->_street;
    }

    /**
     * @param string $number-> house/ building number
     */
    public function setNumber(string $number):void{
        $this->_number = trim($number);
    }

    /**
     * @return string $_number -> house/ building number
     */
    public function getNumber():string{
        return $this->_number;
    }

    /**
     * @param string $box-> mailbox number
     */
    public function setBox(string $box): void
    {
        $this->_box = trim($box);
    }

    /**
     * @return string $_box-> mailbox number
     */
    public function getBox(): string
    {
        return $this->_Box;
    }

    /**
     * @param string $zipcode-> postal code
     */
    public function setZipcode(string $zipcode): void
    {
        $this->_zipcode = trim($zipcode);
    }

    /**
     * @return string $_zipcode-> postal code
     */
    public function getZipcode(): string
    {
        return $this->_zipcode;
    }

    /**
     * @param string $city-> city/ village name
     */
    public function setCity(string $city): void
    {
        $this->_city = trim($city);
    }

    /**
     * @return string $_city-> city/ village name
     */
    public function getCity(): string
    {
        return $this->_city;
    }

    /**
     * @param Country $country-> country information
     */
    public function setCountry(Country $country): void
    {
        $this->_country = $country;
    }

    /**
     * @return Country $_country-> country information
     */
    public function getCountry(): Country
    {
        return $this->_country;
    }

    /**
     * @return string $this -> object address can be serialized natively by json_encode()
     */
    public function jsonSerialize()
    {
        return[
            'id' => $this->_id,
            'street' => $this->_street,
            'number' => $this->_number,
            'box'=> $this->_box,
            'zipcode' => $this->_zipcode,
            'city'=> $this->_city,
            'country' => $this->_country
        ];
    }

    /**
     * @return string $this -> address data in json string
     */
    public function getJSON(): string
    {
        return json_encode(get_object_vars($this));
    }
}
?>