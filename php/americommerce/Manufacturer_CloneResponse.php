<?php

if (!class_exists("Manufacturer_CloneResponse", false)) 
{
class Manufacturer_CloneResponse
{

  /**
   * 
   * @var ManufacturerTrans $Manufacturer_CloneResult
   * @access public
   */
  public $Manufacturer_CloneResult;

  /**
   * 
   * @param ManufacturerTrans $Manufacturer_CloneResult
   * @access public
   */
  public function __construct($Manufacturer_CloneResult)
  {
    $this->Manufacturer_CloneResult = $Manufacturer_CloneResult;
  }

}

}
