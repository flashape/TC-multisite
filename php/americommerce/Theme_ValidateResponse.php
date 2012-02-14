<?php

if (!class_exists("Theme_ValidateResponse", false)) 
{
class Theme_ValidateResponse
{

  /**
   * 
   * @var string $Theme_ValidateResult
   * @access public
   */
  public $Theme_ValidateResult;

  /**
   * 
   * @param string $Theme_ValidateResult
   * @access public
   */
  public function __construct($Theme_ValidateResult)
  {
    $this->Theme_ValidateResult = $Theme_ValidateResult;
  }

}

}
