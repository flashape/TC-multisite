<?php

if (!class_exists("AnalyticRule_Validate", false)) 
{
class AnalyticRule_Validate
{

  /**
   * 
   * @var AnalyticRuleTrans $poAnalyticRuleTrans
   * @access public
   */
  public $poAnalyticRuleTrans;

  /**
   * 
   * @param AnalyticRuleTrans $poAnalyticRuleTrans
   * @access public
   */
  public function __construct($poAnalyticRuleTrans)
  {
    $this->poAnalyticRuleTrans = $poAnalyticRuleTrans;
  }

}

}
