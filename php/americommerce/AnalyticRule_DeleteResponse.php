<?php

if (!class_exists("AnalyticRule_DeleteResponse", false)) 
{
class AnalyticRule_DeleteResponse
{

  /**
   * 
   * @var boolean $AnalyticRule_DeleteResult
   * @access public
   */
  public $AnalyticRule_DeleteResult;

  /**
   * 
   * @param boolean $AnalyticRule_DeleteResult
   * @access public
   */
  public function __construct($AnalyticRule_DeleteResult)
  {
    $this->AnalyticRule_DeleteResult = $AnalyticRule_DeleteResult;
  }

}

}
