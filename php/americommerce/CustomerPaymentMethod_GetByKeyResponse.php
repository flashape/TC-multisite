<?php

if (!class_exists("CustomerPaymentMethod_GetByKeyResponse", false)) 
{
class CustomerPaymentMethod_GetByKeyResponse
{

  /**
   * 
   * @var CustomerPaymentMethodTrans $CustomerPaymentMethod_GetByKeyResult
   * @access public
   */
  public $CustomerPaymentMethod_GetByKeyResult;

  /**
   * 
   * @param CustomerPaymentMethodTrans $CustomerPaymentMethod_GetByKeyResult
   * @access public
   */
  public function __construct($CustomerPaymentMethod_GetByKeyResult)
  {
    $this->CustomerPaymentMethod_GetByKeyResult = $CustomerPaymentMethod_GetByKeyResult;
  }

}

}
