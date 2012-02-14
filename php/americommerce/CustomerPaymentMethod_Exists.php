<?php

if (!class_exists("CustomerPaymentMethod_Exists", false)) 
{
class CustomerPaymentMethod_Exists
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
