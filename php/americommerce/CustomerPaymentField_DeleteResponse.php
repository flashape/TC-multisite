<?php

if (!class_exists("CustomerPaymentField_DeleteResponse", false)) 
{
class CustomerPaymentField_DeleteResponse
{

  /**
   * 
   * @var boolean $CustomerPaymentField_DeleteResult
   * @access public
   */
  public $CustomerPaymentField_DeleteResult;

  /**
   * 
   * @param boolean $CustomerPaymentField_DeleteResult
   * @access public
   */
  public function __construct($CustomerPaymentField_DeleteResult)
  {
    $this->CustomerPaymentField_DeleteResult = $CustomerPaymentField_DeleteResult;
  }

}

}
