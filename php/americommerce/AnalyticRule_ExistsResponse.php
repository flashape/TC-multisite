<?php

if (!class_exists("AnalyticRule_ExistsResponse", false)) 
{
class AnalyticRule_ExistsResponse
{

  /**
   * 
   * @var boolean $AnalyticRule_ExistsResult
   * @access public
   */
  public $AnalyticRule_ExistsResult;

  /**
   * 
   * @param boolean $AnalyticRule_ExistsResult
   * @access public
   */
  public function __construct($AnalyticRule_ExistsResult)
  {
    $this->AnalyticRule_ExistsResult = $AnalyticRule_ExistsResult;
  }

}

}
