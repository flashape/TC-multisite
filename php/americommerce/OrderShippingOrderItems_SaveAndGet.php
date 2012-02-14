<?php

if (!class_exists("OrderShippingOrderItems_SaveAndGet", false)) 
{
class OrderShippingOrderItems_SaveAndGet
{

  /**
   * 
   * @var OrderShippingOrderItemsTrans $poOrderShippingOrderItemsTrans
   * @access public
   */
  public $poOrderShippingOrderItemsTrans;

  /**
   * 
   * @param OrderShippingOrderItemsTrans $poOrderShippingOrderItemsTrans
   * @access public
   */
  public function __construct($poOrderShippingOrderItemsTrans)
  {
    $this->poOrderShippingOrderItemsTrans = $poOrderShippingOrderItemsTrans;
  }

}

}
