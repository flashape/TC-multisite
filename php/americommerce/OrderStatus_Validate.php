<?php

if (!class_exists("OrderStatus_Validate", false)) 
{
class OrderStatus_Validate
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
