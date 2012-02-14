<?php

if (!class_exists("ShippingMethod_Save", false)) 
{
class ShippingMethod_Save
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
