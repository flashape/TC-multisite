<?php

if (!class_exists("PaymentMethod_Exists", false)) 
{
class PaymentMethod_Exists
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
