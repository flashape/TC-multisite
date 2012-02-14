<?php

if (!class_exists("ShippingRule_Clone", false)) 
{
class ShippingRule_Clone
{

  /**
   * 
   * @var int $pishippingRuleID
   * @access public
   */
  public $pishippingRuleID;

  /**
   * 
   * @param int $pishippingRuleID
   * @access public
   */
  public function __construct($pishippingRuleID)
  {
    $this->pishippingRuleID = $pishippingRuleID;
  }

}

}
