<?php

/** 
 *   @author Steven Verelst
 *   @version 0.0.1
 *   @package app\business
 */

namespace app\business;

/**
 * Class Country implements from the interfaces iBusinessObject and JsonSerializable
 * 
 * This class handles the busness functtion of an address
 * @property int $_id -> Primary Key column ID of the table country
 * @property string $_code -> 2 digits ISO country code
 * @property string $_name -> full country name
 */

class Country implements iBusinessObject, \JsonSerializable
{
    private $_id;
    private $_code;
    private $_name;

    public function __construct() {
        $this->_id = 0;
        $this->_code = '';
        $this->_name = '';
    }

    /**
     * @param int $id -> Primary Key column ID of the table country
     */
    public function setId(int $id): void{
        $this->_id = $id;
    }

    /**
     * @return int $id -> Primary Key column ID of the table country
     */
    public function getId(): int{
        return $this->_id;
    }

    /**
     * @param int $code -> 2 digits ISO country code 
     */
    public function setCode(string $code): void {
        /**
         *  @todo Check if countryCode exists
         */
        $this->_code = trim($code);
    }

    /**
     * @return int $_code -> 2 digits ISO country code 
     */
    public function geCode(): string{
        return $this->_code;
    }

    /**
     * @param int $name -> country name 
     */
    public function setName(string $name): void{
        /**
         *  @todo Check if country name is correct
         */
        $this->_name = trim($name);
    }

    /**
     * @return int $name -> country name 
     */
    public function getName(): string{
        return $this->_Name;
    }

    /**
     * @return string $this -> object country can be serialized natively by json_encode()
     */
    public function jsonSerialize()
    {
        return [
            'id' => $this->_id,
            'countryName' => $this->_name,
            'countryCode' => $this->_code,
        ];
    }

    /**
     * @return string $this -> address data in json string
     */
    public function getJSON(): string
    {

        return json_encode($this);
    }

}
?>