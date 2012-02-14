<?php

if (!class_exists("Order_FillOrderItemCollection", false)) 
{
class Order_FillOrderItemCollection
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
