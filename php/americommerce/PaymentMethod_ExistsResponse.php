<?php

if (!class_exists("PaymentMethod_ExistsResponse", false)) 
{
class PaymentMethod_ExistsResponse
{

  /**
   * 
   * @var boolean $PaymentMethod_ExistsResult
   * @access public
   */
  public $PaymentMethod_ExistsResult;

  /**
   * 
   * @param boolean $PaymentMethod_ExistsResult
   * @access public
   */
  public function __construct($PaymentMethod_ExistsResult)
  {
    $this->PaymentMethod_ExistsResult = $PaymentMethod_ExistsResult;
  }

}

}
