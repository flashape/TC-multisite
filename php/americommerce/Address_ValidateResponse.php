<?php

if (!class_exists("Address_ValidateResponse", false)) 
{
class Address_ValidateResponse
{

  /**
   * 
   * @var string $Address_ValidateResult
   * @access public
   */
  public $Address_ValidateResult;

  /**
   * 
   * @param string $Address_ValidateResult
   * @access public
   */
  public function __construct($Address_ValidateResult)
  {
    $this->Address_ValidateResult = $Address_ValidateResult;
  }

}

}
