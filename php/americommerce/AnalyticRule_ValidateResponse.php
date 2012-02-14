<?php

if (!class_exists("AnalyticRule_ValidateResponse", false)) 
{
class AnalyticRule_ValidateResponse
{

  /**
   * 
   * @var string $AnalyticRule_ValidateResult
   * @access public
   */
  public $AnalyticRule_ValidateResult;

  /**
   * 
   * @param string $AnalyticRule_ValidateResult
   * @access public
   */
  public function __construct($AnalyticRule_ValidateResult)
  {
    $this->AnalyticRule_ValidateResult = $AnalyticRule_ValidateResult;
  }

}

}
