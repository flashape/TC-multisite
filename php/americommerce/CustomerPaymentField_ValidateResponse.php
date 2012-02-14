<?php

if (!class_exists("CustomerPaymentField_ValidateResponse", false)) 
{
class CustomerPaymentField_ValidateResponse
{

  /**
   * 
   * @var string $CustomerPaymentField_ValidateResult
   * @access public
   */
  public $CustomerPaymentField_ValidateResult;

  /**
   * 
   * @param string $CustomerPaymentField_ValidateResult
   * @access public
   */
  public function __construct($CustomerPaymentField_ValidateResult)
  {
    $this->CustomerPaymentField_ValidateResult = $CustomerPaymentField_ValidateResult;
  }

}

}
