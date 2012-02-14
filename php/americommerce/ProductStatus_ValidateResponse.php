<?php

if (!class_exists("ProductStatus_ValidateResponse", false)) 
{
class ProductStatus_ValidateResponse
{

  /**
   * 
   * @var string $ProductStatus_ValidateResult
   * @access public
   */
  public $ProductStatus_ValidateResult;

  /**
   * 
   * @param string $ProductStatus_ValidateResult
   * @access public
   */
  public function __construct($ProductStatus_ValidateResult)
  {
    $this->ProductStatus_ValidateResult = $ProductStatus_ValidateResult;
  }

}

}
