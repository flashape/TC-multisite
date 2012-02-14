<?php

if (!class_exists("AnalyticCondition_CloneResponse", false)) 
{
class AnalyticCondition_CloneResponse
{

  /**
   * 
   * @var AnalyticConditionTrans $AnalyticCondition_CloneResult
   * @access public
   */
  public $AnalyticCondition_CloneResult;

  /**
   * 
   * @param AnalyticConditionTrans $AnalyticCondition_CloneResult
   * @access public
   */
  public function __construct($AnalyticCondition_CloneResult)
  {
    $this->AnalyticCondition_CloneResult = $AnalyticCondition_CloneResult;
  }

}

}
