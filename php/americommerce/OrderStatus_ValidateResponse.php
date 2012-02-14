<?php

if (!class_exists("OrderStatus_ValidateResponse", false)) 
{
class OrderStatus_ValidateResponse
{

  /**
   * 
   * @var string $OrderStatus_ValidateResult
   * @access public
   */
  public $OrderStatus_ValidateResult;

  /**
   * 
   * @param string $OrderStatus_ValidateResult
   * @access public
   */
  public function __construct($OrderStatus_ValidateResult)
  {
    $this->OrderStatus_ValidateResult = $OrderStatus_ValidateResult;
  }

}

}
