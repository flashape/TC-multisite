<?php

if (!class_exists("DiscountRules_Clone", false)) 
{
class DiscountRules_Clone
{

  /**
   * 
   * @var int $pidiscountRuleID
   * @access public
   */
  public $pidiscountRuleID;

  /**
   * 
   * @param int $pidiscountRuleID
   * @access public
   */
  public function __construct($pidiscountRuleID)
  {
    $this->pidiscountRuleID = $pidiscountRuleID;
  }

}

}
