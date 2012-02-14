<?php

if (!class_exists("ShippingProviderService_GetByKeyResponse", false)) 
{
class ShippingProviderService_GetByKeyResponse
{

  /**
   * 
   * @var ShippingProviderServiceTrans $ShippingProviderService_GetByKeyResult
   * @access public
   */
  public $ShippingProviderService_GetByKeyResult;

  /**
   * 
   * @param ShippingProviderServiceTrans $ShippingProviderService_GetByKeyResult
   * @access public
   */
  public function __construct($ShippingProviderService_GetByKeyResult)
  {
    $this->ShippingProviderService_GetByKeyResult = $ShippingProviderService_GetByKeyResult;
  }

}

}
