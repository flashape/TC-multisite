<?php

if (!class_exists("PaymentMethod_GetByKeyResponse", false)) 
{
class PaymentMethod_GetByKeyResponse
{

  /**
   * 
   * @var PaymentMethodTrans $PaymentMethod_GetByKeyResult
   * @access public
   */
  public $PaymentMethod_GetByKeyResult;

  /**
   * 
   * @param PaymentMethodTrans $PaymentMethod_GetByKeyResult
   * @access public
   */
  public function __construct($PaymentMethod_GetByKeyResult)
  {
    $this->PaymentMethod_GetByKeyResult = $PaymentMethod_GetByKeyResult;
  }

}

}
