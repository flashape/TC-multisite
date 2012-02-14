<?php

if (!class_exists("AnalyticAction_DeleteResponse", false)) 
{
class AnalyticAction_DeleteResponse
{

  /**
   * 
   * @var boolean $AnalyticAction_DeleteResult
   * @access public
   */
  public $AnalyticAction_DeleteResult;

  /**
   * 
   * @param boolean $AnalyticAction_DeleteResult
   * @access public
   */
  public function __construct($AnalyticAction_DeleteResult)
  {
    $this->AnalyticAction_DeleteResult = $AnalyticAction_DeleteResult;
  }

}

}
