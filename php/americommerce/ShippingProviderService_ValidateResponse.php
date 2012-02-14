<?php

if (!class_exists("ShippingProviderService_ValidateResponse", false)) 
{
class ShippingProviderService_ValidateResponse
{

  /**
   * 
   * @var string $ShippingProviderService_ValidateResult
   * @access public
   */
  public $ShippingProviderService_ValidateResult;

  /**
   * 
   * @param string $ShippingProviderService_ValidateResult
   * @access public
   */
  public function __construct($ShippingProviderService_ValidateResult)
  {
    $this->ShippingProviderService_ValidateResult = $ShippingProviderService_ValidateResult;
  }

}

}
