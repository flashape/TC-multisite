<?php

if (!class_exists("CustomerPaymentField_GetByKeyResponse", false)) 
{
class CustomerPaymentField_GetByKeyResponse
{

  /**
   * 
   * @var CustomerPaymentFieldTrans $CustomerPaymentField_GetByKeyResult
   * @access public
   */
  public $CustomerPaymentField_GetByKeyResult;

  /**
   * 
   * @param CustomerPaymentFieldTrans $CustomerPaymentField_GetByKeyResult
   * @access public
   */
  public function __construct($CustomerPaymentField_GetByKeyResult)
  {
    $this->CustomerPaymentField_GetByKeyResult = $CustomerPaymentField_GetByKeyResult;
  }

}

}
