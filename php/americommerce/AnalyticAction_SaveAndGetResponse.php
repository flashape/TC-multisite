<?php

if (!class_exists("AnalyticAction_SaveAndGetResponse", false)) 
{
class AnalyticAction_SaveAndGetResponse
{

  /**
   * 
   * @var AnalyticActionTrans $AnalyticAction_SaveAndGetResult
   * @access public
   */
  public $AnalyticAction_SaveAndGetResult;

  /**
   * 
   * @param AnalyticActionTrans $AnalyticAction_SaveAndGetResult
   * @access public
   */
  public function __construct($AnalyticAction_SaveAndGetResult)
  {
    $this->AnalyticAction_SaveAndGetResult = $AnalyticAction_SaveAndGetResult;
  }

}

}
