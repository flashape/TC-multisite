<?php

if (!class_exists("CustomerPaymentMethod_Delete", false)) 
{
class CustomerPaymentMethod_Delete
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
