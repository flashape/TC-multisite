<?php

if (!class_exists("CustomerPaymentMethod_CloneResponse", false)) 
{
class CustomerPaymentMethod_CloneResponse
{

  /**
   * 
   * @var CustomerPaymentMethodTrans $CustomerPaymentMethod_CloneResult
   * @access public
   */
  public $CustomerPaymentMethod_CloneResult;

  /**
   * 
   * @param CustomerPaymentMethodTrans $CustomerPaymentMethod_CloneResult
   * @access public
   */
  public function __construct($CustomerPaymentMethod_CloneResult)
  {
    $this->CustomerPaymentMethod_CloneResult = $CustomerPaymentMethod_CloneResult;
  }

}

}
