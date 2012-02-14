<?php

if (!class_exists("AnalyticRule_SaveResponse", false)) 
{
class AnalyticRule_SaveResponse
{

  /**
   * 
   * @var boolean $AnalyticRule_SaveResult
   * @access public
   */
  public $AnalyticRule_SaveResult;

  /**
   * 
   * @param boolean $AnalyticRule_SaveResult
   * @access public
   */
  public function __construct($AnalyticRule_SaveResult)
  {
    $this->AnalyticRule_SaveResult = $AnalyticRule_SaveResult;
  }

}

}
