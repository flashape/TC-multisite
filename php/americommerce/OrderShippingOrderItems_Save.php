<?php

if (!class_exists("OrderShippingOrderItems_Save", false)) 
{
class OrderShippingOrderItems_Save
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
