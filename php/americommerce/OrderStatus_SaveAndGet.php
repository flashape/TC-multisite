<?php

if (!class_exists("OrderStatus_SaveAndGet", false)) 
{
class OrderStatus_SaveAndGet
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
