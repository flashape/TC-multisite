<?php

if (!class_exists("DiscountRules_GetByKey", false)) 
{
class DiscountRules_GetByKey
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
