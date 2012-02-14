<?php

if (!class_exists("OrderShippingOrderItems_Validate", false)) 
{
class OrderShippingOrderItems_Validate
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
