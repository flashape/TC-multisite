<?php

if (!class_exists("OrderItem_Save", false)) 
{
class OrderItem_Save
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
