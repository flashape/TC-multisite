<?php

if (!class_exists("AnalyticCondition_Save", false)) 
{
class AnalyticCondition_Save
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
