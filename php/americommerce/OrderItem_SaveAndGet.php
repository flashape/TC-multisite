<?php

if (!class_exists("OrderItem_SaveAndGet", false)) 
{
class OrderItem_SaveAndGet
{

  /**
   * 
   * @var OrderItemTrans $poOrderItemTrans
   * @access public
   */
  public $poOrderItemTrans;

  /**
   * 
   * @param OrderItemTrans $poOrderItemTrans
   * @access public
   */
  public function __construct($poOrderItemTrans)
  {
    $this->poOrderItemTrans = $poOrderItemTrans;
  }

}

}
