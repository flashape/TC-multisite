<?php

if (!class_exists("AnalyticRule_GetByKey", false)) 
{
class AnalyticRule_GetByKey
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
