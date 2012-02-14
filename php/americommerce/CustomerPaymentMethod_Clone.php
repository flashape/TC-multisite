<?php

if (!class_exists("CustomerPaymentMethod_Clone", false)) 
{
class CustomerPaymentMethod_Clone
{

  /**
   * 
   * @var int $picustomerPaymentMethodID
   * @access public
   */
  public $picustomerPaymentMethodID;

  /**
   * 
   * @param int $picustomerPaymentMethodID
   * @access public
   */
  public function __construct($picustomerPaymentMethodID)
  {
    $this->picustomerPaymentMethodID = $picustomerPaymentMethodID;
  }

}

}
