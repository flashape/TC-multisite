<?php

if (!class_exists("PaymentMethod_SaveAndGetResponse", false)) 
{
class PaymentMethod_SaveAndGetResponse
{

  /**
   * 
   * @var PaymentMethodTrans $PaymentMethod_SaveAndGetResult
   * @access public
   */
  public $PaymentMethod_SaveAndGetResult;

  /**
   * 
   * @param PaymentMethodTrans $PaymentMethod_SaveAndGetResult
   * @access public
   */
  public function __construct($PaymentMethod_SaveAndGetResult)
  {
    $this->PaymentMethod_SaveAndGetResult = $PaymentMethod_SaveAndGetResult;
  }

}

}
