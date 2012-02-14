<?php

if (!class_exists("PaymentMethod_SaveResponse", false)) 
{
class PaymentMethod_SaveResponse
{

  /**
   * 
   * @var boolean $PaymentMethod_SaveResult
   * @access public
   */
  public $PaymentMethod_SaveResult;

  /**
   * 
   * @param boolean $PaymentMethod_SaveResult
   * @access public
   */
  public function __construct($PaymentMethod_SaveResult)
  {
    $this->PaymentMethod_SaveResult = $PaymentMethod_SaveResult;
  }

}

}
