<?php

if (!class_exists("CustomerPaymentMethod_SaveAndGetResponse", false)) 
{
class CustomerPaymentMethod_SaveAndGetResponse
{

  /**
   * 
   * @var CustomerPaymentMethodTrans $CustomerPaymentMethod_SaveAndGetResult
   * @access public
   */
  public $CustomerPaymentMethod_SaveAndGetResult;

  /**
   * 
   * @param CustomerPaymentMethodTrans $CustomerPaymentMethod_SaveAndGetResult
   * @access public
   */
  public function __construct($CustomerPaymentMethod_SaveAndGetResult)
  {
    $this->CustomerPaymentMethod_SaveAndGetResult = $CustomerPaymentMethod_SaveAndGetResult;
  }

}

}
