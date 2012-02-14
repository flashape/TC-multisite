<?php

if (!class_exists("OrderItem_Validate", false)) 
{
class OrderItem_Validate
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
