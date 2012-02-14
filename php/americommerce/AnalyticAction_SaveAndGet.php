<?php

if (!class_exists("AnalyticAction_SaveAndGet", false)) 
{
class AnalyticAction_SaveAndGet
{

  /**
   * 
   * @var AnalyticActionTrans $poAnalyticActionTrans
   * @access public
   */
  public $poAnalyticActionTrans;

  /**
   * 
   * @param AnalyticActionTrans $poAnalyticActionTrans
   * @access public
   */
  public function __construct($poAnalyticActionTrans)
  {
    $this->poAnalyticActionTrans = $poAnalyticActionTrans;
  }

}

}
