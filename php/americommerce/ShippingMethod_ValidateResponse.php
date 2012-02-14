<?php

if (!class_exists("ShippingMethod_ValidateResponse", false)) 
{
class ShippingMethod_ValidateResponse
{

  /**
   * 
   * @var string $ShippingMethod_ValidateResult
   * @access public
   */
  public $ShippingMethod_ValidateResult;

  /**
   * 
   * @param string $ShippingMethod_ValidateResult
   * @access public
   */
  public function __construct($ShippingMethod_ValidateResult)
  {
    $this->ShippingMethod_ValidateResult = $ShippingMethod_ValidateResult;
  }

}

}
