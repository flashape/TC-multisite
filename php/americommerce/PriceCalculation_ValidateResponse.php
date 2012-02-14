<?php

if (!class_exists("PriceCalculation_ValidateResponse", false)) 
{
class PriceCalculation_ValidateResponse
{

  /**
   * 
   * @var string $PriceCalculation_ValidateResult
   * @access public
   */
  public $PriceCalculation_ValidateResult;

  /**
   * 
   * @param string $PriceCalculation_ValidateResult
   * @access public
   */
  public function __construct($PriceCalculation_ValidateResult)
  {
    $this->PriceCalculation_ValidateResult = $PriceCalculation_ValidateResult;
  }

}

}
