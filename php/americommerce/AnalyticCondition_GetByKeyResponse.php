<?php

if (!class_exists("AnalyticCondition_GetByKeyResponse", false)) 
{
class AnalyticCondition_GetByKeyResponse
{

  /**
   * 
   * @var AnalyticConditionTrans $AnalyticCondition_GetByKeyResult
   * @access public
   */
  public $AnalyticCondition_GetByKeyResult;

  /**
   * 
   * @param AnalyticConditionTrans $AnalyticCondition_GetByKeyResult
   * @access public
   */
  public function __construct($AnalyticCondition_GetByKeyResult)
  {
    $this->AnalyticCondition_GetByKeyResult = $AnalyticCondition_GetByKeyResult;
  }

}

}
