<?php

if (!class_exists("PaymentMethod_GetByKey", false)) 
{
class PaymentMethod_GetByKey
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
