<?php

if (!class_exists("AnalyticAction_CloneResponse", false)) 
{
class AnalyticAction_CloneResponse
{

  /**
   * 
   * @var AnalyticActionTrans $AnalyticAction_CloneResult
   * @access public
   */
  public $AnalyticAction_CloneResult;

  /**
   * 
   * @param AnalyticActionTrans $AnalyticAction_CloneResult
   * @access public
   */
  public function __construct($AnalyticAction_CloneResult)
  {
    $this->AnalyticAction_CloneResult = $AnalyticAction_CloneResult;
  }

}

}
