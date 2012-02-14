<?php

if (!class_exists("Country_GetByNameOrCountryCode", false)) 
{
class Country_GetByNameOrCountryCode
{

  /**
   * 
   * @var string $psCountryNameOrCode
   * @access public
   */
  public $psCountryNameOrCode;

  /**
   * 
   * @param string $psCountryNameOrCode
   * @access public
   */
  public function __construct($psCountryNameOrCode)
  {
    $this->psCountryNameOrCode = $psCountryNameOrCode;
  }

}

}
