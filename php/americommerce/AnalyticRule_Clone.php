<?php

if (!class_exists("AnalyticRule_Clone", false)) 
{
class AnalyticRule_Clone
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
