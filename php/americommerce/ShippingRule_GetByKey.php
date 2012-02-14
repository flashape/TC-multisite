<?php

if (!class_exists("ShippingRule_GetByKey", false)) 
{
class ShippingRule_GetByKey
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
