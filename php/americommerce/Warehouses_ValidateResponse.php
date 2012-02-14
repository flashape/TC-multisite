<?php

if (!class_exists("Warehouses_ValidateResponse", false)) 
{
class Warehouses_ValidateResponse
{

  /**
   * 
   * @var string $Warehouses_ValidateResult
   * @access public
   */
  public $Warehouses_ValidateResult;

  /**
   * 
   * @param string $Warehouses_ValidateResult
   * @access public
   */
  public function __construct($Warehouses_ValidateResult)
  {
    $this->Warehouses_ValidateResult = $Warehouses_ValidateResult;
  }

}

}
