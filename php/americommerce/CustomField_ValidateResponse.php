<?php

if (!class_exists("CustomField_ValidateResponse", false)) 
{
class CustomField_ValidateResponse
{

  /**
   * 
   * @var string $CustomField_ValidateResult
   * @access public
   */
  public $CustomField_ValidateResult;

  /**
   * 
   * @param string $CustomField_ValidateResult
   * @access public
   */
  public function __construct($CustomField_ValidateResult)
  {
    $this->CustomField_ValidateResult = $CustomField_ValidateResult;
  }

}

}
