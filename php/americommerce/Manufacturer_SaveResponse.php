<?php

if (!class_exists("Manufacturer_SaveResponse", false)) 
{
class Manufacturer_SaveResponse
{

  /**
   * 
   * @var boolean $Manufacturer_SaveResult
   * @access public
   */
  public $Manufacturer_SaveResult;

  /**
   * 
   * @param boolean $Manufacturer_SaveResult
   * @access public
   */
  public function __construct($Manufacturer_SaveResult)
  {
    $this->Manufacturer_SaveResult = $Manufacturer_SaveResult;
  }

}

}
