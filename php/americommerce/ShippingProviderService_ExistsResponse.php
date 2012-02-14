<?php

if (!class_exists("ShippingProviderService_ExistsResponse", false)) 
{
class ShippingProviderService_ExistsResponse
{

  /**
   * 
   * @var boolean $ShippingProviderService_ExistsResult
   * @access public
   */
  public $ShippingProviderService_ExistsResult;

  /**
   * 
   * @param boolean $ShippingProviderService_ExistsResult
   * @access public
   */
  public function __construct($ShippingProviderService_ExistsResult)
  {
    $this->ShippingProviderService_ExistsResult = $ShippingProviderService_ExistsResult;
  }

}

}
