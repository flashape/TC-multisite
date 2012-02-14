<?php

if (!class_exists("Manufacturer_Validate", false)) 
{
class Manufacturer_Validate
{

  /**
   * 
   * @var ManufacturerTrans $poManufacturerTrans
   * @access public
   */
  public $poManufacturerTrans;

  /**
   * 
   * @param ManufacturerTrans $poManufacturerTrans
   * @access public
   */
  public function __construct($poManufacturerTrans)
  {
    $this->poManufacturerTrans = $poManufacturerTrans;
  }

}

}
