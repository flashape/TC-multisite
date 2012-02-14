<?php

if (!class_exists("ShippingProviderService_SaveAndGetResponse", false)) 
{
class ShippingProviderService_SaveAndGetResponse
{

  /**
   * 
   * @var ShippingProviderServiceTrans $ShippingProviderService_SaveAndGetResult
   * @access public
   */
  public $ShippingProviderService_SaveAndGetResult;

  /**
   * 
   * @param ShippingProviderServiceTrans $ShippingProviderService_SaveAndGetResult
   * @access public
   */
  public function __construct($ShippingProviderService_SaveAndGetResult)
  {
    $this->ShippingProviderService_SaveAndGetResult = $ShippingProviderService_SaveAndGetResult;
  }

}

}
