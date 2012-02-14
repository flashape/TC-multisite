<?php

if (!class_exists("Manufacturer_GetByManufacturerNameResponse", false)) 
{
class Manufacturer_GetByManufacturerNameResponse
{

  /**
   * 
   * @var ManufacturerTrans $Manufacturer_GetByManufacturerNameResult
   * @access public
   */
  public $Manufacturer_GetByManufacturerNameResult;

  /**
   * 
   * @param ManufacturerTrans $Manufacturer_GetByManufacturerNameResult
   * @access public
   */
  public function __construct($Manufacturer_GetByManufacturerNameResult)
  {
    $this->Manufacturer_GetByManufacturerNameResult = $Manufacturer_GetByManufacturerNameResult;
  }

}

}
