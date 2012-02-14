<?php

if (!class_exists("Session_ValidateResponse", false)) 
{
class Session_ValidateResponse
{

  /**
   * 
   * @var string $Session_ValidateResult
   * @access public
   */
  public $Session_ValidateResult;

  /**
   * 
   * @param string $Session_ValidateResult
   * @access public
   */
  public function __construct($Session_ValidateResult)
  {
    $this->Session_ValidateResult = $Session_ValidateResult;
  }

}

}
