<?php

if (!class_exists("CreditCard_ValidateResponse", false)) 
{
class CreditCard_ValidateResponse
{

  /**
   * 
   * @var string $CreditCard_ValidateResult
   * @access public
   */
  public $CreditCard_ValidateResult;

  /**
   * 
   * @param string $CreditCard_ValidateResult
   * @access public
   */
  public function __construct($CreditCard_ValidateResult)
  {
    $this->CreditCard_ValidateResult = $CreditCard_ValidateResult;
  }

}

}
