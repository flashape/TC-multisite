<?php

if (!class_exists("CustomerPaymentField_CloneResponse", false)) 
{
class CustomerPaymentField_CloneResponse
{

  /**
   * 
   * @var CustomerPaymentFieldTrans $CustomerPaymentField_CloneResult
   * @access public
   */
  public $CustomerPaymentField_CloneResult;

  /**
   * 
   * @param CustomerPaymentFieldTrans $CustomerPaymentField_CloneResult
   * @access public
   */
  public function __construct($CustomerPaymentField_CloneResult)
  {
    $this->CustomerPaymentField_CloneResult = $CustomerPaymentField_CloneResult;
  }

}

}
