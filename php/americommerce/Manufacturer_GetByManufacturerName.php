<?php

if (!class_exists("Manufacturer_GetByManufacturerName", false)) 
{
class Manufacturer_GetByManufacturerName
{

  /**
   * 
   * @var string $psManufacturerName
   * @access public
   */
  public $psManufacturerName;

  /**
   * 
   * @param string $psManufacturerName
   * @access public
   */
  public function __construct($psManufacturerName)
  {
    $this->psManufacturerName = $psManufacturerName;
  }

}

}
