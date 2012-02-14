<?php

if (!class_exists("ShippingRule_ValidateResponse", false)) 
{
class ShippingRule_ValidateResponse
{

  /**
   * 
   * @var string $ShippingRule_ValidateResult
   * @access public
   */
  public $ShippingRule_ValidateResult;

  /**
   * 
   * @param string $ShippingRule_ValidateResult
   * @access public
   */
  public function __construct($ShippingRule_ValidateResult)
  {
    $this->ShippingRule_ValidateResult = $ShippingRule_ValidateResult;
  }

}

}
