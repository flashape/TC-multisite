<?php

if (!class_exists("OrderStatus_Save", false)) 
{
class OrderStatus_Save
{

  /**
   * 
   * @var OrderStatusTrans $poOrderStatusTrans
   * @access public
   */
  public $poOrderStatusTrans;

  /**
   * 
   * @param OrderStatusTrans $poOrderStatusTrans
   * @access public
   */
  public function __construct($poOrderStatusTrans)
  {
    $this->poOrderStatusTrans = $poOrderStatusTrans;
  }

}

}
