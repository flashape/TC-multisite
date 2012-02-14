<?php

if (!class_exists("ShippingMethod_GetByKeyResponse", false)) 
{
class ShippingMethod_GetByKeyResponse
{

  /**
   * 
   * @var ShippingMethodTrans $ShippingMethod_GetByKeyResult
   * @access public
   */
  public $ShippingMethod_GetByKeyResult;

  /**
   * 
   * @param ShippingMethodTrans $ShippingMethod_GetByKeyResult
   * @access public
   */
  public function __construct($ShippingMethod_GetByKeyResult)
  {
    $this->ShippingMethod_GetByKeyResult = $ShippingMethod_GetByKeyResult;
  }

}

}
