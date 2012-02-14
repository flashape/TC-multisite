<?php

if (!class_exists("OrderPayment_CloneResponse", false)) 
{
class OrderPayment_CloneResponse
{

  /**
   * 
   * @var OrderPaymentTrans $OrderPayment_CloneResult
   * @access public
   */
  public $OrderPayment_CloneResult;

  /**
   * 
   * @param OrderPaymentTrans $OrderPayment_CloneResult
   * @access public
   */
  public function __construct($OrderPayment_CloneResult)
  {
    $this->OrderPayment_CloneResult = $OrderPayment_CloneResult;
  }

}

}
