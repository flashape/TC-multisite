<?php

if (!class_exists("OrderPayment_GetCCResponse", false)) 
{
class OrderPayment_GetCCResponse
{

  /**
   * 
   * @var string $OrderPayment_GetCCResult
   * @access public
   */
  public $OrderPayment_GetCCResult;

  /**
   * 
   * @param string $OrderPayment_GetCCResult
   * @access public
   */
  public function __construct($OrderPayment_GetCCResult)
  {
    $this->OrderPayment_GetCCResult = $OrderPayment_GetCCResult;
  }

}

}
