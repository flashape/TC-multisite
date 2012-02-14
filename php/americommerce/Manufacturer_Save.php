<?php

if (!class_exists("Manufacturer_Save", false)) 
{
class Manufacturer_Save
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
