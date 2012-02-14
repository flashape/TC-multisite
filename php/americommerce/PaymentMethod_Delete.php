<?php

if (!class_exists("PaymentMethod_Delete", false)) 
{
class PaymentMethod_Delete
{

  /**
   * 
   * @var int $pipaymentMethodID
   * @access public
   */
  public $pipaymentMethodID;

  /**
   * 
   * @param int $pipaymentMethodID
   * @access public
   */
  public function __construct($pipaymentMethodID)
  {
    $this->pipaymentMethodID = $pipaymentMethodID;
  }

}

}
