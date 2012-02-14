<?php

if (!class_exists("AnalyticRule_Exists", false)) 
{
class AnalyticRule_Exists
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
