<?php

if (!class_exists("EmailLog_ValidateResponse", false)) 
{
class EmailLog_ValidateResponse
{

  /**
   * 
   * @var string $EmailLog_ValidateResult
   * @access public
   */
  public $EmailLog_ValidateResult;

  /**
   * 
   * @param string $EmailLog_ValidateResult
   * @access public
   */
  public function __construct($EmailLog_ValidateResult)
  {
    $this->EmailLog_ValidateResult = $EmailLog_ValidateResult;
  }

}

}
