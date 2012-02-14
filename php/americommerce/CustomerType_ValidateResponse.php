<?php

if (!class_exists("CustomerType_ValidateResponse", false)) 
{
class CustomerType_ValidateResponse
{

  /**
   * 
   * @var string $CustomerType_ValidateResult
   * @access public
   */
  public $CustomerType_ValidateResult;

  /**
   * 
   * @param string $CustomerType_ValidateResult
   * @access public
   */
  public function __construct($CustomerType_ValidateResult)
  {
    $this->CustomerType_ValidateResult = $CustomerType_ValidateResult;
  }

}

}
