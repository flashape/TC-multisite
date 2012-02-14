<?php

if (!class_exists("AnalyticCondition_Validate", false)) 
{
class AnalyticCondition_Validate
{

  /**
   * 
   * @var AnalyticConditionTrans $poAnalyticConditionTrans
   * @access public
   */
  public $poAnalyticConditionTrans;

  /**
   * 
   * @param AnalyticConditionTrans $poAnalyticConditionTrans
   * @access public
   */
  public function __construct($poAnalyticConditionTrans)
  {
    $this->poAnalyticConditionTrans = $poAnalyticConditionTrans;
  }

}

}
