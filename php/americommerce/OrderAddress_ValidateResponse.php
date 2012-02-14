<?php

if (!class_exists("OrderAddress_ValidateResponse", false)) 
{
class OrderAddress_ValidateResponse
{

  /**
   * 
   * @var string $OrderAddress_ValidateResult
   * @access public
   */
  public $OrderAddress_ValidateResult;

  /**
   * 
   * @param string $OrderAddress_ValidateResult
   * @access public
   */
  public function __construct($OrderAddress_ValidateResult)
  {
    $this->OrderAddress_ValidateResult = $OrderAddress_ValidateResult;
  }

}

}
