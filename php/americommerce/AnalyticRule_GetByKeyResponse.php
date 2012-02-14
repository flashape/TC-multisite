<?php

if (!class_exists("AnalyticRule_GetByKeyResponse", false)) 
{
class AnalyticRule_GetByKeyResponse
{

  /**
   * 
   * @var AnalyticRuleTrans $AnalyticRule_GetByKeyResult
   * @access public
   */
  public $AnalyticRule_GetByKeyResult;

  /**
   * 
   * @param AnalyticRuleTrans $AnalyticRule_GetByKeyResult
   * @access public
   */
  public function __construct($AnalyticRule_GetByKeyResult)
  {
    $this->AnalyticRule_GetByKeyResult = $AnalyticRule_GetByKeyResult;
  }

}

}
