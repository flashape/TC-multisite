<?php

if (!class_exists("Order_FillOrderPaymentCollection", false)) 
{
class Order_FillOrderPaymentCollection
{

  /**
   * 
   * @var OrderTrans $poOrderTrans
   * @access public
   */
  public $poOrderTrans;

  /**
   * 
   * @param OrderTrans $poOrderTrans
   * @access public
   */
  public function __construct($poOrderTrans)
  {
    $this->poOrderTrans = $poOrderTrans;
  }

}

}
