<?php

if (!class_exists("AnalyticCondition_SaveAndGetResponse", false)) 
{
class AnalyticCondition_SaveAndGetResponse
{

  /**
   * 
   * @var AnalyticConditionTrans $AnalyticCondition_SaveAndGetResult
   * @access public
   */
  public $AnalyticCondition_SaveAndGetResult;

  /**
   * 
   * @param AnalyticConditionTrans $AnalyticCondition_SaveAndGetResult
   * @access public
   */
  public function __construct($AnalyticCondition_SaveAndGetResult)
  {
    $this->AnalyticCondition_SaveAndGetResult = $AnalyticCondition_SaveAndGetResult;
  }

}

}
