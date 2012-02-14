<?php

if (!class_exists("AnalyticAction_ValidateResponse", false)) 
{
class AnalyticAction_ValidateResponse
{

  /**
   * 
   * @var string $AnalyticAction_ValidateResult
   * @access public
   */
  public $AnalyticAction_ValidateResult;

  /**
   * 
   * @param string $AnalyticAction_ValidateResult
   * @access public
   */
  public function __construct($AnalyticAction_ValidateResult)
  {
    $this->AnalyticAction_ValidateResult = $AnalyticAction_ValidateResult;
  }

}

}
