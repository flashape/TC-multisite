<?php

if (!class_exists("Manufacturer_DeleteResponse", false)) 
{
class Manufacturer_DeleteResponse
{

  /**
   * 
   * @var boolean $Manufacturer_DeleteResult
   * @access public
   */
  public $Manufacturer_DeleteResult;

  /**
   * 
   * @param boolean $Manufacturer_DeleteResult
   * @access public
   */
  public function __construct($Manufacturer_DeleteResult)
  {
    $this->Manufacturer_DeleteResult = $Manufacturer_DeleteResult;
  }

}

}
