<?php

if (!class_exists("OrderPayment_GetByKeyResponse", false)) 
{
class OrderPayment_GetByKeyResponse
{

  /**
   * 
   * @var OrderPaymentTrans $OrderPayment_GetByKeyResult
   * @access public
   */
  public $OrderPayment_GetByKeyResult;

  /**
   * 
   * @param OrderPaymentTrans $OrderPayment_GetByKeyResult
   * @access public
   */
  public function __construct($OrderPayment_GetByKeyResult)
  {
    $this->OrderPayment_GetByKeyResult = $OrderPayment_GetByKeyResult;
  }

}

}
