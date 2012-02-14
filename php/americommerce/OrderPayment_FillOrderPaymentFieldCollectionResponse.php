<?php

if (!class_exists("OrderPayment_FillOrderPaymentFieldCollectionResponse", false)) 
{
class OrderPayment_FillOrderPaymentFieldCollectionResponse
{

  /**
   * 
   * @var OrderPaymentTrans $OrderPayment_FillOrderPaymentFieldCollectionResult
   * @access public
   */
  public $OrderPayment_FillOrderPaymentFieldCollectionResult;

  /**
   * 
   * @param OrderPaymentTrans $OrderPayment_FillOrderPaymentFieldCollectionResult
   * @access public
   */
  public function __construct($OrderPayment_FillOrderPaymentFieldCollectionResult)
  {
    $this->OrderPayment_FillOrderPaymentFieldCollectionResult = $OrderPayment_FillOrderPaymentFieldCollectionResult;
  }

}

}
