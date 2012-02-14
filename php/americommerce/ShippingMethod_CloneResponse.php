<?php

if (!class_exists("ShippingMethod_CloneResponse", false)) 
{
class ShippingMethod_CloneResponse
{

  /**
   * 
   * @var ShippingMethodTrans $ShippingMethod_CloneResult
   * @access public
   */
  public $ShippingMethod_CloneResult;

  /**
   * 
   * @param ShippingMethodTrans $ShippingMethod_CloneResult
   * @access public
   */
  public function __construct($ShippingMethod_CloneResult)
  {
    $this->ShippingMethod_CloneResult = $ShippingMethod_CloneResult;
  }

}

}
