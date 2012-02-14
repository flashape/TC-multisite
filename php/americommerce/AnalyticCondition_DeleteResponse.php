<?php

if (!class_exists("AnalyticCondition_DeleteResponse", false)) 
{
class AnalyticCondition_DeleteResponse
{

  /**
   * 
   * @var boolean $AnalyticCondition_DeleteResult
   * @access public
   */
  public $AnalyticCondition_DeleteResult;

  /**
   * 
   * @param boolean $AnalyticCondition_DeleteResult
   * @access public
   */
  public function __construct($AnalyticCondition_DeleteResult)
  {
    $this->AnalyticCondition_DeleteResult = $AnalyticCondition_DeleteResult;
  }

}

}
