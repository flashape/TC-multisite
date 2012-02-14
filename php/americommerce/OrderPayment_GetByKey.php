<?php

if (!class_exists("OrderPayment_GetByKey", false)) 
{
class OrderPayment_GetByKey
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
