<?php

if (!class_exists("Cart_ValidateResponse", false)) 
{
class Cart_ValidateResponse
{

  /**
   * 
   * @var string $Cart_ValidateResult
   * @access public
   */
  public $Cart_ValidateResult;

  /**
   * 
   * @param string $Cart_ValidateResult
   * @access public
   */
  public function __construct($Cart_ValidateResult)
  {
    $this->Cart_ValidateResult = $Cart_ValidateResult;
  }

}

}
