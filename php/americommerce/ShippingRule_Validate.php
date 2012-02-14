<?php

if (!class_exists("ShippingRule_Validate", false)) 
{
class ShippingRule_Validate
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
