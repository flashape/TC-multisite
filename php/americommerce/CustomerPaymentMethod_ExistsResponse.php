<?php

if (!class_exists("CustomerPaymentMethod_ExistsResponse", false)) 
{
class CustomerPaymentMethod_ExistsResponse
{

  /**
   * 
   * @var boolean $CustomerPaymentMethod_ExistsResult
   * @access public
   */
  public $CustomerPaymentMethod_ExistsResult;

  /**
   * 
   * @param boolean $CustomerPaymentMethod_ExistsResult
   * @access public
   */
  public function __construct($CustomerPaymentMethod_ExistsResult)
  {
    $this->CustomerPaymentMethod_ExistsResult = $CustomerPaymentMethod_ExistsResult;
  }

}

}
