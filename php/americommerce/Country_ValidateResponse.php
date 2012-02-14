<?php

if (!class_exists("Country_ValidateResponse", false)) 
{
class Country_ValidateResponse
{

  /**
   * 
   * @var string $Country_ValidateResult
   * @access public
   */
  public $Country_ValidateResult;

  /**
   * 
   * @param string $Country_ValidateResult
   * @access public
   */
  public function __construct($Country_ValidateResult)
  {
    $this->Country_ValidateResult = $Country_ValidateResult;
  }

}

}
