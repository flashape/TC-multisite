<?php

if (!class_exists("PaymentMethod_ValidateResponse", false)) 
{
class PaymentMethod_ValidateResponse
{

  /**
   * 
   * @var string $PaymentMethod_ValidateResult
   * @access public
   */
  public $PaymentMethod_ValidateResult;

  /**
   * 
   * @param string $PaymentMethod_ValidateResult
   * @access public
   */
  public function __construct($PaymentMethod_ValidateResult)
  {
    $this->PaymentMethod_ValidateResult = $PaymentMethod_ValidateResult;
  }

}

}
