<?php

if (!class_exists("Manufacturer_ValidateResponse", false)) 
{
class Manufacturer_ValidateResponse
{

  /**
   * 
   * @var string $Manufacturer_ValidateResult
   * @access public
   */
  public $Manufacturer_ValidateResult;

  /**
   * 
   * @param string $Manufacturer_ValidateResult
   * @access public
   */
  public function __construct($Manufacturer_ValidateResult)
  {
    $this->Manufacturer_ValidateResult = $Manufacturer_ValidateResult;
  }

}

}
