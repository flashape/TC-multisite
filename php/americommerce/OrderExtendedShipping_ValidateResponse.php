<?php

if (!class_exists("OrderExtendedShipping_ValidateResponse", false)) 
{
class OrderExtendedShipping_ValidateResponse
{

  /**
   * 
   * @var string $OrderExtendedShipping_ValidateResult
   * @access public
   */
  public $OrderExtendedShipping_ValidateResult;

  /**
   * 
   * @param string $OrderExtendedShipping_ValidateResult
   * @access public
   */
  public function __construct($OrderExtendedShipping_ValidateResult)
  {
    $this->OrderExtendedShipping_ValidateResult = $OrderExtendedShipping_ValidateResult;
  }

}

}
