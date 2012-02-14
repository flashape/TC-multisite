<?php

if (!class_exists("Cart_GetPaymentMethodsResponse", false)) 
{
class Cart_GetPaymentMethodsResponse
{

  /**
   * 
   * @var array $Cart_GetPaymentMethodsResult
   * @access public
   */
  public $Cart_GetPaymentMethodsResult;

  /**
   * 
   * @param array $Cart_GetPaymentMethodsResult
   * @access public
   */
  public function __construct($Cart_GetPaymentMethodsResult)
  {
    $this->Cart_GetPaymentMethodsResult = $Cart_GetPaymentMethodsResult;
  }

}

}
