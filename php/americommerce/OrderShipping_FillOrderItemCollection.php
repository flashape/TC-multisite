<?php

if (!class_exists("OrderShipping_FillOrderItemCollection", false)) 
{
class OrderShipping_FillOrderItemCollection
{

  /**
   * 
   * @var OrderShippingTrans $poOrderShippingTrans
   * @access public
   */
  public $poOrderShippingTrans;

  /**
   * 
   * @param OrderShippingTrans $poOrderShippingTrans
   * @access public
   */
  public function __construct($poOrderShippingTrans)
  {
    $this->poOrderShippingTrans = $poOrderShippingTrans;
  }

}

}
