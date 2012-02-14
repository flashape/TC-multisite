<?php

if (!class_exists("CustomerPaymentMethod_ValidateResponse", false)) 
{
class CustomerPaymentMethod_ValidateResponse
{

  /**
   * 
   * @var string $CustomerPaymentMethod_ValidateResult
   * @access public
   */
  public $CustomerPaymentMethod_ValidateResult;

  /**
   * 
   * @param string $CustomerPaymentMethod_ValidateResult
   * @access public
   */
  public function __construct($CustomerPaymentMethod_ValidateResult)
  {
    $this->CustomerPaymentMethod_ValidateResult = $CustomerPaymentMethod_ValidateResult;
  }

}

}
