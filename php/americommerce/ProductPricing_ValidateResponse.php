<?php

if (!class_exists("ProductPricing_ValidateResponse", false)) 
{
class ProductPricing_ValidateResponse
{

  /**
   * 
   * @var string $ProductPricing_ValidateResult
   * @access public
   */
  public $ProductPricing_ValidateResult;

  /**
   * 
   * @param string $ProductPricing_ValidateResult
   * @access public
   */
  public function __construct($ProductPricing_ValidateResult)
  {
    $this->ProductPricing_ValidateResult = $ProductPricing_ValidateResult;
  }

}

}
