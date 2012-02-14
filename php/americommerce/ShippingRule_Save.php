<?php

if (!class_exists("ShippingRule_Save", false)) 
{
class ShippingRule_Save
{

  /**
   * 
   * @var ShippingRuleTrans $poShippingRuleTrans
   * @access public
   */
  public $poShippingRuleTrans;

  /**
   * 
   * @param ShippingRuleTrans $poShippingRuleTrans
   * @access public
   */
  public function __construct($poShippingRuleTrans)
  {
    $this->poShippingRuleTrans = $poShippingRuleTrans;
  }

}

}
