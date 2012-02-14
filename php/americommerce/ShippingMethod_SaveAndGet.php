<?php

if (!class_exists("ShippingMethod_SaveAndGet", false)) 
{
class ShippingMethod_SaveAndGet
{

  /**
   * 
   * @var ShippingMethodTrans $poShippingMethodTrans
   * @access public
   */
  public $poShippingMethodTrans;

  /**
   * 
   * @param ShippingMethodTrans $poShippingMethodTrans
   * @access public
   */
  public function __construct($poShippingMethodTrans)
  {
    $this->poShippingMethodTrans = $poShippingMethodTrans;
  }

}

}
