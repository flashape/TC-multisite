<?php

if (!class_exists("Regions_ValidateResponse", false)) 
{
class Regions_ValidateResponse
{

  /**
   * 
   * @var string $Regions_ValidateResult
   * @access public
   */
  public $Regions_ValidateResult;

  /**
   * 
   * @param string $Regions_ValidateResult
   * @access public
   */
  public function __construct($Regions_ValidateResult)
  {
    $this->Regions_ValidateResult = $Regions_ValidateResult;
  }

}

}
