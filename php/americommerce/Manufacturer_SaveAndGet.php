<?php

if (!class_exists("Manufacturer_SaveAndGet", false)) 
{
class Manufacturer_SaveAndGet
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
