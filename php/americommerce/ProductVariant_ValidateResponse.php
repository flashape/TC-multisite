<?php

if (!class_exists("ProductVariant_ValidateResponse", false)) 
{
class ProductVariant_ValidateResponse
{

  /**
   * 
   * @var string $ProductVariant_ValidateResult
   * @access public
   */
  public $ProductVariant_ValidateResult;

  /**
   * 
   * @param string $ProductVariant_ValidateResult
   * @access public
   */
  public function __construct($ProductVariant_ValidateResult)
  {
    $this->ProductVariant_ValidateResult = $ProductVariant_ValidateResult;
  }

}

}
