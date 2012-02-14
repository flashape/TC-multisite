<?php

if (!class_exists("ShippingRule_SaveAndGet", false)) 
{
class ShippingRule_SaveAndGet
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
