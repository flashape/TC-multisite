<?php

if (!class_exists("ProductVariantGroup_ValidateResponse", false)) 
{
class ProductVariantGroup_ValidateResponse
{

  /**
   * 
   * @var string $ProductVariantGroup_ValidateResult
   * @access public
   */
  public $ProductVariantGroup_ValidateResult;

  /**
   * 
   * @param string $ProductVariantGroup_ValidateResult
   * @access public
   */
  public function __construct($ProductVariantGroup_ValidateResult)
  {
    $this->ProductVariantGroup_ValidateResult = $ProductVariantGroup_ValidateResult;
  }

}

}
