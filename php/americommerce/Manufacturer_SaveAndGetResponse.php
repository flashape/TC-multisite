<?php

if (!class_exists("Manufacturer_SaveAndGetResponse", false)) 
{
class Manufacturer_SaveAndGetResponse
{

  /**
   * 
   * @var ManufacturerTrans $Manufacturer_SaveAndGetResult
   * @access public
   */
  public $Manufacturer_SaveAndGetResult;

  /**
   * 
   * @param ManufacturerTrans $Manufacturer_SaveAndGetResult
   * @access public
   */
  public function __construct($Manufacturer_SaveAndGetResult)
  {
    $this->Manufacturer_SaveAndGetResult = $Manufacturer_SaveAndGetResult;
  }

}

}
