<?php

if (!class_exists("OrderPayment_ValidateResponse", false)) 
{
class OrderPayment_ValidateResponse
{

  /**
   * 
   * @var string $OrderPayment_ValidateResult
   * @access public
   */
  public $OrderPayment_ValidateResult;

  /**
   * 
   * @param string $OrderPayment_ValidateResult
   * @access public
   */
  public function __construct($OrderPayment_ValidateResult)
  {
    $this->OrderPayment_ValidateResult = $OrderPayment_ValidateResult;
  }

}

}
