<?php

if (!class_exists("AnalyticRule_Delete", false)) 
{
class AnalyticRule_Delete
{

  /**
   * 
   * @var int $piAnalyticRuleID
   * @access public
   */
  public $piAnalyticRuleID;

  /**
   * 
   * @param int $piAnalyticRuleID
   * @access public
   */
  public function __construct($piAnalyticRuleID)
  {
    $this->piAnalyticRuleID = $piAnalyticRuleID;
  }

}

}
