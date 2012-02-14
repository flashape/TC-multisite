<?php

if (!class_exists("ShippingProviderService_GetByDisplayNameResponse", false)) 
{
class ShippingProviderService_GetByDisplayNameResponse
{

  /**
   * 
   * @var ShippingProviderServiceTrans $ShippingProviderService_GetByDisplayNameResult
   * @access public
   */
  public $ShippingProviderService_GetByDisplayNameResult;

  /**
   * 
   * @param ShippingProviderServiceTrans $ShippingProviderService_GetByDisplayNameResult
   * @access public
   */
  public function __construct($ShippingProviderService_GetByDisplayNameResult)
  {
    $this->ShippingProviderService_GetByDisplayNameResult = $ShippingProviderService_GetByDisplayNameResult;
  }

}

}
