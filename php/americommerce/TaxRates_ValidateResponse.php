<?php

if (!class_exists("TaxRates_ValidateResponse", false)) 
{
class TaxRates_ValidateResponse
{

  /**
   * 
   * @var string $TaxRates_ValidateResult
   * @access public
   */
  public $TaxRates_ValidateResult;

  /**
   * 
   * @param string $TaxRates_ValidateResult
   * @access public
   */
  public function __construct($TaxRates_ValidateResult)
  {
    $this->TaxRates_ValidateResult = $TaxRates_ValidateResult;
  }

}

}
