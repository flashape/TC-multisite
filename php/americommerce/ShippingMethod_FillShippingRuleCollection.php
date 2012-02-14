<?php

if (!class_exists("ShippingMethod_FillShippingRuleCollection", false)) 
{
class ShippingMethod_FillShippingRuleCollection
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
