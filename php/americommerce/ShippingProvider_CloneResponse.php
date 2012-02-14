<?php

if (!class_exists("ShippingProvider_CloneResponse", false)) 
{
class ShippingProvider_CloneResponse
{

  /**
   * 
   * @var ShippingProviderTrans $ShippingProvider_CloneResult
   * @access public
   */
  public $ShippingProvider_CloneResult;

  /**
   * 
   * @param ShippingProviderTrans $ShippingProvider_CloneResult
   * @access public
   */
  public function __construct($ShippingProvider_CloneResult)
  {
    $this->ShippingProvider_CloneResult = $ShippingProvider_CloneResult;
  }

}

}
