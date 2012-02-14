<?php

if (!class_exists("OrderPayment_Clone", false)) 
{
class OrderPayment_Clone
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
