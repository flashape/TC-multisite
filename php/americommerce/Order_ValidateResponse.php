<?php

if (!class_exists("Order_ValidateResponse", false)) 
{
class Order_ValidateResponse
{

  /**
   * 
   * @var string $Order_ValidateResult
   * @access public
   */
  public $Order_ValidateResult;

  /**
   * 
   * @param string $Order_ValidateResult
   * @access public
   */
  public function __construct($Order_ValidateResult)
  {
    $this->Order_ValidateResult = $Order_ValidateResult;
  }

}

}
