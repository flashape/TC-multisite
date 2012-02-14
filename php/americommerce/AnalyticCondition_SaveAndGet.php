<?php

if (!class_exists("AnalyticCondition_SaveAndGet", false)) 
{
class AnalyticCondition_SaveAndGet
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
