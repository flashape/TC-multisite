<?php

if (!class_exists("CustomerPaymentMethod_DeleteResponse", false)) 
{
class CustomerPaymentMethod_DeleteResponse
{

  /**
   * 
   * @var boolean $CustomerPaymentMethod_DeleteResult
   * @access public
   */
  public $CustomerPaymentMethod_DeleteResult;

  /**
   * 
   * @param boolean $CustomerPaymentMethod_DeleteResult
   * @access public
   */
  public function __construct($CustomerPaymentMethod_DeleteResult)
  {
    $this->CustomerPaymentMethod_DeleteResult = $CustomerPaymentMethod_DeleteResult;
  }

}

}
