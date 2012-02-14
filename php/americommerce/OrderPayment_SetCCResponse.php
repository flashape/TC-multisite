<?php

if (!class_exists("OrderPayment_SetCCResponse", false)) 
{
class OrderPayment_SetCCResponse
{

  /**
   * 
   * @var boolean $OrderPayment_SetCCResult
   * @access public
   */
  public $OrderPayment_SetCCResult;

  /**
   * 
   * @param boolean $OrderPayment_SetCCResult
   * @access public
   */
  public function __construct($OrderPayment_SetCCResult)
  {
    $this->OrderPayment_SetCCResult = $OrderPayment_SetCCResult;
  }

}

}
