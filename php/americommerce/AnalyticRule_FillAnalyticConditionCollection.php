<?php

if (!class_exists("AnalyticRule_FillAnalyticConditionCollection", false)) 
{
class AnalyticRule_FillAnalyticConditionCollection
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
