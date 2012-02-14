<?php

if (!class_exists("OrderShipping_ValidateResponse", false)) 
{
class OrderShipping_ValidateResponse
{

  /**
   * 
   * @var string $OrderShipping_ValidateResult
   * @access public
   */
  public $OrderShipping_ValidateResult;

  /**
   * 
   * @param string $OrderShipping_ValidateResult
   * @access public
   */
  public function __construct($OrderShipping_ValidateResult)
  {
    $this->OrderShipping_ValidateResult = $OrderShipping_ValidateResult;
  }

}

}
