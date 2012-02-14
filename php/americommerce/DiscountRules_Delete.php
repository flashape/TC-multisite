<?php

if (!class_exists("DiscountRules_Delete", false)) 
{
class DiscountRules_Delete
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
