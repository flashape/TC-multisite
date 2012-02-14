<?php

if (!class_exists("ShippingProviderService_DeleteResponse", false)) 
{
class ShippingProviderService_DeleteResponse
{

  /**
   * 
   * @var boolean $ShippingProviderService_DeleteResult
   * @access public
   */
  public $ShippingProviderService_DeleteResult;

  /**
   * 
   * @param boolean $ShippingProviderService_DeleteResult
   * @access public
   */
  public function __construct($ShippingProviderService_DeleteResult)
  {
    $this->ShippingProviderService_DeleteResult = $ShippingProviderService_DeleteResult;
  }

}

}
