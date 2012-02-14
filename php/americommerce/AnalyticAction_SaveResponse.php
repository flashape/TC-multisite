<?php

if (!class_exists("AnalyticAction_SaveResponse", false)) 
{
class AnalyticAction_SaveResponse
{

  /**
   * 
   * @var boolean $AnalyticAction_SaveResult
   * @access public
   */
  public $AnalyticAction_SaveResult;

  /**
   * 
   * @param boolean $AnalyticAction_SaveResult
   * @access public
   */
  public function __construct($AnalyticAction_SaveResult)
  {
    $this->AnalyticAction_SaveResult = $AnalyticAction_SaveResult;
  }

}

}
