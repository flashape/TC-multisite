<?php

if (!class_exists("Customer_ValidateResponse", false)) 
{
class Customer_ValidateResponse
{

  /**
   * 
   * @var string $Customer_ValidateResult
   * @access public
   */
  public $Customer_ValidateResult;

  /**
   * 
   * @param string $Customer_ValidateResult
   * @access public
   */
  public function __construct($Customer_ValidateResult)
  {
    $this->Customer_ValidateResult = $Customer_ValidateResult;
  }

}

}
