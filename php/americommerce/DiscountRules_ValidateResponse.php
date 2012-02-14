<?php

if (!class_exists("DiscountRules_ValidateResponse", false)) 
{
class DiscountRules_ValidateResponse
{

  /**
   * 
   * @var string $DiscountRules_ValidateResult
   * @access public
   */
  public $DiscountRules_ValidateResult;

  /**
   * 
   * @param string $DiscountRules_ValidateResult
   * @access public
   */
  public function __construct($DiscountRules_ValidateResult)
  {
    $this->DiscountRules_ValidateResult = $DiscountRules_ValidateResult;
  }

}

}
