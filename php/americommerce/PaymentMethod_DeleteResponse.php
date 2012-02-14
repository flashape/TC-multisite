<?php

if (!class_exists("PaymentMethod_DeleteResponse", false)) 
{
class PaymentMethod_DeleteResponse
{

  /**
   * 
   * @var boolean $PaymentMethod_DeleteResult
   * @access public
   */
  public $PaymentMethod_DeleteResult;

  /**
   * 
   * @param boolean $PaymentMethod_DeleteResult
   * @access public
   */
  public function __construct($PaymentMethod_DeleteResult)
  {
    $this->PaymentMethod_DeleteResult = $PaymentMethod_DeleteResult;
  }

}

}
