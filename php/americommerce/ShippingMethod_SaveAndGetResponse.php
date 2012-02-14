<?php

if (!class_exists("ShippingMethod_SaveAndGetResponse", false)) 
{
class ShippingMethod_SaveAndGetResponse
{

  /**
   * 
   * @var ShippingMethodTrans $ShippingMethod_SaveAndGetResult
   * @access public
   */
  public $ShippingMethod_SaveAndGetResult;

  /**
   * 
   * @param ShippingMethodTrans $ShippingMethod_SaveAndGetResult
   * @access public
   */
  public function __construct($ShippingMethod_SaveAndGetResult)
  {
    $this->ShippingMethod_SaveAndGetResult = $ShippingMethod_SaveAndGetResult;
  }

}

}
