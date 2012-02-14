<?php

if (!class_exists("CustomerPaymentField_ExistsResponse", false)) 
{
class CustomerPaymentField_ExistsResponse
{

  /**
   * 
   * @var boolean $CustomerPaymentField_ExistsResult
   * @access public
   */
  public $CustomerPaymentField_ExistsResult;

  /**
   * 
   * @param boolean $CustomerPaymentField_ExistsResult
   * @access public
   */
  public function __construct($CustomerPaymentField_ExistsResult)
  {
    $this->CustomerPaymentField_ExistsResult = $CustomerPaymentField_ExistsResult;
  }

}

}
