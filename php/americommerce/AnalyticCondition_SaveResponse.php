<?php

if (!class_exists("AnalyticCondition_SaveResponse", false)) 
{
class AnalyticCondition_SaveResponse
{

  /**
   * 
   * @var boolean $AnalyticCondition_SaveResult
   * @access public
   */
  public $AnalyticCondition_SaveResult;

  /**
   * 
   * @param boolean $AnalyticCondition_SaveResult
   * @access public
   */
  public function __construct($AnalyticCondition_SaveResult)
  {
    $this->AnalyticCondition_SaveResult = $AnalyticCondition_SaveResult;
  }

}

}
