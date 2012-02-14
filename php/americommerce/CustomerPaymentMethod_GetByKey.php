<?php

if (!class_exists("CustomerPaymentMethod_GetByKey", false)) 
{
class CustomerPaymentMethod_GetByKey
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
