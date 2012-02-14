<?php

if (!class_exists("CustomerPaymentField_SaveAndGetResponse", false)) 
{
class CustomerPaymentField_SaveAndGetResponse
{

  /**
   * 
   * @var CustomerPaymentFieldTrans $CustomerPaymentField_SaveAndGetResult
   * @access public
   */
  public $CustomerPaymentField_SaveAndGetResult;

  /**
   * 
   * @param CustomerPaymentFieldTrans $CustomerPaymentField_SaveAndGetResult
   * @access public
   */
  public function __construct($CustomerPaymentField_SaveAndGetResult)
  {
    $this->CustomerPaymentField_SaveAndGetResult = $CustomerPaymentField_SaveAndGetResult;
  }

}

}
