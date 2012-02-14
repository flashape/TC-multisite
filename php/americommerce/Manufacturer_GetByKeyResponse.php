<?php

if (!class_exists("Manufacturer_GetByKeyResponse", false)) 
{
class Manufacturer_GetByKeyResponse
{

  /**
   * 
   * @var ManufacturerTrans $Manufacturer_GetByKeyResult
   * @access public
   */
  public $Manufacturer_GetByKeyResult;

  /**
   * 
   * @param ManufacturerTrans $Manufacturer_GetByKeyResult
   * @access public
   */
  public function __construct($Manufacturer_GetByKeyResult)
  {
    $this->Manufacturer_GetByKeyResult = $Manufacturer_GetByKeyResult;
  }

}

}
