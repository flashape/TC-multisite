<?php

if (!class_exists("ShippingProvider_SaveResponse", false)) 
{
class ShippingProvider_SaveResponse
{

  /**
   * 
   * @var boolean $ShippingProvider_SaveResult
   * @access public
   */
  public $ShippingProvider_SaveResult;

  /**
   * 
   * @param boolean $ShippingProvider_SaveResult
   * @access public
   */
  public function __construct($ShippingProvider_SaveResult)
  {
    $this->ShippingProvider_SaveResult = $ShippingProvider_SaveResult;
  }

}

}
