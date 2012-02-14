<?php

if (!class_exists("ShippingProvider_GetByKeyResponse", false)) 
{
class ShippingProvider_GetByKeyResponse
{

  /**
   * 
   * @var ShippingProviderTrans $ShippingProvider_GetByKeyResult
   * @access public
   */
  public $ShippingProvider_GetByKeyResult;

  /**
   * 
   * @param ShippingProviderTrans $ShippingProvider_GetByKeyResult
   * @access public
   */
  public function __construct($ShippingProvider_GetByKeyResult)
  {
    $this->ShippingProvider_GetByKeyResult = $ShippingProvider_GetByKeyResult;
  }

}

}
