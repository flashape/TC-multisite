<?php

if (!class_exists("ShippingProvider_ValidateResponse", false)) 
{
class ShippingProvider_ValidateResponse
{

  /**
   * 
   * @var string $ShippingProvider_ValidateResult
   * @access public
   */
  public $ShippingProvider_ValidateResult;

  /**
   * 
   * @param string $ShippingProvider_ValidateResult
   * @access public
   */
  public function __construct($ShippingProvider_ValidateResult)
  {
    $this->ShippingProvider_ValidateResult = $ShippingProvider_ValidateResult;
  }

}

}
