<?php

if (!class_exists("AnalyticRule_SaveAndGetResponse", false)) 
{
class AnalyticRule_SaveAndGetResponse
{

  /**
   * 
   * @var AnalyticRuleTrans $AnalyticRule_SaveAndGetResult
   * @access public
   */
  public $AnalyticRule_SaveAndGetResult;

  /**
   * 
   * @param AnalyticRuleTrans $AnalyticRule_SaveAndGetResult
   * @access public
   */
  public function __construct($AnalyticRule_SaveAndGetResult)
  {
    $this->AnalyticRule_SaveAndGetResult = $AnalyticRule_SaveAndGetResult;
  }

}

}
