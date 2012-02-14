<?php

if (!class_exists("AnalyticAction_GetByKeyResponse", false)) 
{
class AnalyticAction_GetByKeyResponse
{

  /**
   * 
   * @var AnalyticActionTrans $AnalyticAction_GetByKeyResult
   * @access public
   */
  public $AnalyticAction_GetByKeyResult;

  /**
   * 
   * @param AnalyticActionTrans $AnalyticAction_GetByKeyResult
   * @access public
   */
  public function __construct($AnalyticAction_GetByKeyResult)
  {
    $this->AnalyticAction_GetByKeyResult = $AnalyticAction_GetByKeyResult;
  }

}

}
