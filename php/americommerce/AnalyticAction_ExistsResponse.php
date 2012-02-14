<?php

if (!class_exists("AnalyticAction_ExistsResponse", false)) 
{
class AnalyticAction_ExistsResponse
{

  /**
   * 
   * @var boolean $AnalyticAction_ExistsResult
   * @access public
   */
  public $AnalyticAction_ExistsResult;

  /**
   * 
   * @param boolean $AnalyticAction_ExistsResult
   * @access public
   */
  public function __construct($AnalyticAction_ExistsResult)
  {
    $this->AnalyticAction_ExistsResult = $AnalyticAction_ExistsResult;
  }

}

}
