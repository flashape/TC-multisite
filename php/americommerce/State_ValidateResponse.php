<?php

if (!class_exists("State_ValidateResponse", false)) 
{
class State_ValidateResponse
{

  /**
   * 
   * @var string $State_ValidateResult
   * @access public
   */
  public $State_ValidateResult;

  /**
   * 
   * @param string $State_ValidateResult
   * @access public
   */
  public function __construct($State_ValidateResult)
  {
    $this->State_ValidateResult = $State_ValidateResult;
  }

}

}
