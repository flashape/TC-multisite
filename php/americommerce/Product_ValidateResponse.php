<?php

if (!class_exists("Product_ValidateResponse", false)) 
{
class Product_ValidateResponse
{

  /**
   * 
   * @var string $Product_ValidateResult
   * @access public
   */
  public $Product_ValidateResult;

  /**
   * 
   * @param string $Product_ValidateResult
   * @access public
   */
  public function __construct($Product_ValidateResult)
  {
    $this->Product_ValidateResult = $Product_ValidateResult;
  }

}

}
