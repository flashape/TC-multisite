<?php

if (!class_exists("AnalyticAction_Save", false)) 
{
class AnalyticAction_Save
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
