<?php

if (!class_exists("ShippingProvider_ExistsResponse", false)) 
{
class ShippingProvider_ExistsResponse
{

  /**
   * 
   * @var boolean $ShippingProvider_ExistsResult
   * @access public
   */
  public $ShippingProvider_ExistsResult;

  /**
   * 
   * @param boolean $ShippingProvider_ExistsResult
   * @access public
   */
  public function __construct($ShippingProvider_ExistsResult)
  {
    $this->ShippingProvider_ExistsResult = $ShippingProvider_ExistsResult;
  }

}

}
