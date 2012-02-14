<?php

if (!class_exists("ShippingProviderService_SaveResponse", false)) 
{
class ShippingProviderService_SaveResponse
{

  /**
   * 
   * @var boolean $ShippingProviderService_SaveResult
   * @access public
   */
  public $ShippingProviderService_SaveResult;

  /**
   * 
   * @param boolean $ShippingProviderService_SaveResult
   * @access public
   */
  public function __construct($ShippingProviderService_SaveResult)
  {
    $this->ShippingProviderService_SaveResult = $ShippingProviderService_SaveResult;
  }

}

}
