<?php

if (!class_exists("PaymentMethod_CloneResponse", false)) 
{
class PaymentMethod_CloneResponse
{

  /**
   * 
   * @var PaymentMethodTrans $PaymentMethod_CloneResult
   * @access public
   */
  public $PaymentMethod_CloneResult;

  /**
   * 
   * @param PaymentMethodTrans $PaymentMethod_CloneResult
   * @access public
   */
  public function __construct($PaymentMethod_CloneResult)
  {
    $this->PaymentMethod_CloneResult = $PaymentMethod_CloneResult;
  }

}

}
