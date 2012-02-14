<?php

if (!class_exists("ShippingProviderService_GetByIdentifierNameResponse", false)) 
{
class ShippingProviderService_GetByIdentifierNameResponse
{

  /**
   * 
   * @var ShippingProviderServiceTrans $ShippingProviderService_GetByIdentifierNameResult
   * @access public
   */
  public $ShippingProviderService_GetByIdentifierNameResult;

  /**
   * 
   * @param ShippingProviderServiceTrans $ShippingProviderService_GetByIdentifierNameResult
   * @access public
   */
  public function __construct($ShippingProviderService_GetByIdentifierNameResult)
  {
    $this->ShippingProviderService_GetByIdentifierNameResult = $ShippingProviderService_GetByIdentifierNameResult;
  }

}

}
