<?php

if (!class_exists("DiscountMethods_ValidateResponse", false)) 
{
class DiscountMethods_ValidateResponse
{

  /**
   * 
   * @var string $DiscountMethods_ValidateResult
   * @access public
   */
  public $DiscountMethods_ValidateResult;

  /**
   * 
   * @param string $DiscountMethods_ValidateResult
   * @access public
   */
  public function __construct($DiscountMethods_ValidateResult)
  {
    $this->DiscountMethods_ValidateResult = $DiscountMethods_ValidateResult;
  }

}

}
