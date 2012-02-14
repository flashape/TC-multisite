<?php

if (!class_exists("DiscountRules_Exists", false)) 
{
class DiscountRules_Exists
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
