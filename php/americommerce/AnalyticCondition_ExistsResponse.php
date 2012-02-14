<?php

if (!class_exists("AnalyticCondition_ExistsResponse", false)) 
{
class AnalyticCondition_ExistsResponse
{

  /**
   * 
   * @var boolean $AnalyticCondition_ExistsResult
   * @access public
   */
  public $AnalyticCondition_ExistsResult;

  /**
   * 
   * @param boolean $AnalyticCondition_ExistsResult
   * @access public
   */
  public function __construct($AnalyticCondition_ExistsResult)
  {
    $this->AnalyticCondition_ExistsResult = $AnalyticCondition_ExistsResult;
  }

}

}
