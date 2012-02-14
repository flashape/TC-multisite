<?php

if (!class_exists("ShippingProvider_GetByCodeResponse", false)) 
{
class ShippingProvider_GetByCodeResponse
{

  /**
   * 
   * @var ShippingProviderTrans $ShippingProvider_GetByCodeResult
   * @access public
   */
  public $ShippingProvider_GetByCodeResult;

  /**
   * 
   * @param ShippingProviderTrans $ShippingProvider_GetByCodeResult
   * @access public
   */
  public function __construct($ShippingProvider_GetByCodeResult)
  {
    $this->ShippingProvider_GetByCodeResult = $ShippingProvider_GetByCodeResult;
  }

}

}
