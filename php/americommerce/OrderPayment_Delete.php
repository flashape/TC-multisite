<?php

if (!class_exists("OrderPayment_Delete", false)) 
{
class OrderPayment_Delete
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
