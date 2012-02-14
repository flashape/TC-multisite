<?php

if (!class_exists("PaymentMethod_FillPaymentMethodFieldCollectionResponse", false)) 
{
class PaymentMethod_FillPaymentMethodFieldCollectionResponse
{

  /**
   * 
   * @var PaymentMethodTrans $PaymentMethod_FillPaymentMethodFieldCollectionResult
   * @access public
   */
  public $PaymentMethod_FillPaymentMethodFieldCollectionResult;

  /**
   * 
   * @param PaymentMethodTrans $PaymentMethod_FillPaymentMethodFieldCollectionResult
   * @access public
   */
  public function __construct($PaymentMethod_FillPaymentMethodFieldCollectionResult)
  {
    $this->PaymentMethod_FillPaymentMethodFieldCollectionResult = $PaymentMethod_FillPaymentMethodFieldCollectionResult;
  }

}

}
