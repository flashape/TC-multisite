<?php

if (!class_exists("Manufacturer_ExistsResponse", false)) 
{
class Manufacturer_ExistsResponse
{

  /**
   * 
   * @var boolean $Manufacturer_ExistsResult
   * @access public
   */
  public $Manufacturer_ExistsResult;

  /**
   * 
   * @param boolean $Manufacturer_ExistsResult
   * @access public
   */
  public function __construct($Manufacturer_ExistsResult)
  {
    $this->Manufacturer_ExistsResult = $Manufacturer_ExistsResult;
  }

}

}
