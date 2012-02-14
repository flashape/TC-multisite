<?php

if (!class_exists("OrderPayment_SaveAndGetResponse", false)) 
{
class OrderPayment_SaveAndGetResponse
{

  /**
   * 
   * @var OrderPaymentTrans $OrderPayment_SaveAndGetResult
   * @access public
   */
  public $OrderPayment_SaveAndGetResult;

  /**
   * 
   * @param OrderPaymentTrans $OrderPayment_SaveAndGetResult
   * @access public
   */
  public function __construct($OrderPayment_SaveAndGetResult)
  {
    $this->OrderPayment_SaveAndGetResult = $OrderPayment_SaveAndGetResult;
  }

}

}
