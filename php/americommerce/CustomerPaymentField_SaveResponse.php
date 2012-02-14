<?php

if (!class_exists("CustomerPaymentField_SaveResponse", false)) 
{
class CustomerPaymentField_SaveResponse
{

  /**
   * 
   * @var boolean $CustomerPaymentField_SaveResult
   * @access public
   */
  public $CustomerPaymentField_SaveResult;

  /**
   * 
   * @param boolean $CustomerPaymentField_SaveResult
   * @access public
   */
  public function __construct($CustomerPaymentField_SaveResult)
  {
    $this->CustomerPaymentField_SaveResult = $CustomerPaymentField_SaveResult;
  }

}

}
