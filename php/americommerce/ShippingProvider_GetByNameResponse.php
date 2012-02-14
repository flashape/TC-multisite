<?php

if (!class_exists("ShippingProvider_GetByNameResponse", false)) 
{
class ShippingProvider_GetByNameResponse
{

  /**
   * 
   * @var ShippingProviderTrans $ShippingProvider_GetByNameResult
   * @access public
   */
  public $ShippingProvider_GetByNameResult;

  /**
   * 
   * @param ShippingProviderTrans $ShippingProvider_GetByNameResult
   * @access public
   */
  public function __construct($ShippingProvider_GetByNameResult)
  {
    $this->ShippingProvider_GetByNameResult = $ShippingProvider_GetByNameResult;
  }

}

}
