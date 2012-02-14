<?php

if (!class_exists("AnalyticRule_Save", false)) 
{
class AnalyticRule_Save
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
