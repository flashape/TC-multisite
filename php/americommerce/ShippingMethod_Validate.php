<?php

if (!class_exists("ShippingMethod_Validate", false)) 
{
class ShippingMethod_Validate
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
