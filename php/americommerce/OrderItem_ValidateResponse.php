<?php

if (!class_exists("OrderItem_ValidateResponse", false)) 
{
class OrderItem_ValidateResponse
{

  /**
   * 
   * @var string $OrderItem_ValidateResult
   * @access public
   */
  public $OrderItem_ValidateResult;

  /**
   * 
   * @param string $OrderItem_ValidateResult
   * @access public
   */
  public function __construct($OrderItem_ValidateResult)
  {
    $this->OrderItem_ValidateResult = $OrderItem_ValidateResult;
  }

}

}
