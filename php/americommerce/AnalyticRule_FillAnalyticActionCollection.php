<?php

if (!class_exists("AnalyticRule_FillAnalyticActionCollection", false)) 
{
class AnalyticRule_FillAnalyticActionCollection
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
