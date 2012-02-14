<?php

if (!class_exists("AnalyticAction_Validate", false)) 
{
class AnalyticAction_Validate
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
