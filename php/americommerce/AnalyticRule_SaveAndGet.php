<?php

if (!class_exists("AnalyticRule_SaveAndGet", false)) 
{
class AnalyticRule_SaveAndGet
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
