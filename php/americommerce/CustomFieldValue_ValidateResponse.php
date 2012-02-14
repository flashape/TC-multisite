<?php

if (!class_exists("CustomFieldValue_ValidateResponse", false)) 
{
class CustomFieldValue_ValidateResponse
{

  /**
   * 
   * @var string $CustomFieldValue_ValidateResult
   * @access public
   */
  public $CustomFieldValue_ValidateResult;

  /**
   * 
   * @param string $CustomFieldValue_ValidateResult
   * @access public
   */
  public function __construct($CustomFieldValue_ValidateResult)
  {
    $this->CustomFieldValue_ValidateResult = $CustomFieldValue_ValidateResult;
  }

}

}
