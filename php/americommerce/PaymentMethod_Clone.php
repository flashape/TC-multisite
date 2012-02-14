<?php

if (!class_exists("PaymentMethod_Clone", false)) 
{
class PaymentMethod_Clone
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
