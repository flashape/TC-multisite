<?php

if (!class_exists("ShippingRule_Delete", false)) 
{
class ShippingRule_Delete
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
