<?php

if (!class_exists("ShippingProvider_SaveAndGetResponse", false)) 
{
class ShippingProvider_SaveAndGetResponse
{

  /**
   * 
   * @var ShippingProviderTrans $ShippingProvider_SaveAndGetResult
   * @access public
   */
  public $ShippingProvider_SaveAndGetResult;

  /**
   * 
   * @param ShippingProviderTrans $ShippingProvider_SaveAndGetResult
   * @access public
   */
  public function __construct($ShippingProvider_SaveAndGetResult)
  {
    $this->ShippingProvider_SaveAndGetResult = $ShippingProvider_SaveAndGetResult;
  }

}

}
