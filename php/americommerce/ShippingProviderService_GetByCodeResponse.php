<?php

if (!class_exists("ShippingProviderService_GetByCodeResponse", false)) 
{
class ShippingProviderService_GetByCodeResponse
{

  /**
   * 
   * @var ShippingProviderServiceTrans $ShippingProviderService_GetByCodeResult
   * @access public
   */
  public $ShippingProviderService_GetByCodeResult;

  /**
   * 
   * @param ShippingProviderServiceTrans $ShippingProviderService_GetByCodeResult
   * @access public
   */
  public function __construct($ShippingProviderService_GetByCodeResult)
  {
    $this->ShippingProviderService_GetByCodeResult = $ShippingProviderService_GetByCodeResult;
  }

}

}
