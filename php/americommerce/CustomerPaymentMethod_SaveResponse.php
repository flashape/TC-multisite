<?php

if (!class_exists("CustomerPaymentMethod_SaveResponse", false)) 
{
class CustomerPaymentMethod_SaveResponse
{

  /**
   * 
   * @var boolean $CustomerPaymentMethod_SaveResult
   * @access public
   */
  public $CustomerPaymentMethod_SaveResult;

  /**
   * 
   * @param boolean $CustomerPaymentMethod_SaveResult
   * @access public
   */
  public function __construct($CustomerPaymentMethod_SaveResult)
  {
    $this->CustomerPaymentMethod_SaveResult = $CustomerPaymentMethod_SaveResult;
  }

}

}
