<?php

if (!class_exists("WeightUnit_ValidateResponse", false)) 
{
class WeightUnit_ValidateResponse
{

  /**
   * 
   * @var string $WeightUnit_ValidateResult
   * @access public
   */
  public $WeightUnit_ValidateResult;

  /**
   * 
   * @param string $WeightUnit_ValidateResult
   * @access public
   */
  public function __construct($WeightUnit_ValidateResult)
  {
    $this->WeightUnit_ValidateResult = $WeightUnit_ValidateResult;
  }

}

}
