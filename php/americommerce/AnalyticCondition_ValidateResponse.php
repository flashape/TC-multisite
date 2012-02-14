<?php

if (!class_exists("AnalyticCondition_ValidateResponse", false)) 
{
class AnalyticCondition_ValidateResponse
{

  /**
   * 
   * @var string $AnalyticCondition_ValidateResult
   * @access public
   */
  public $AnalyticCondition_ValidateResult;

  /**
   * 
   * @param string $AnalyticCondition_ValidateResult
   * @access public
   */
  public function __construct($AnalyticCondition_ValidateResult)
  {
    $this->AnalyticCondition_ValidateResult = $AnalyticCondition_ValidateResult;
  }

}

}
