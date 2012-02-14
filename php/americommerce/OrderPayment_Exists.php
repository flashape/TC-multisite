<?php

if (!class_exists("OrderPayment_Exists", false)) 
{
class OrderPayment_Exists
{

  /**
   * 
   * @var int $piorderPaymentID
   * @access public
   */
  public $piorderPaymentID;

  /**
   * 
   * @param int $piorderPaymentID
   * @access public
   */
  public function __construct($piorderPaymentID)
  {
    $this->piorderPaymentID = $piorderPaymentID;
  }

}

}
