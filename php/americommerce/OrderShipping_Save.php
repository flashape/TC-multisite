<?php

if (!class_exists("OrderShipping_Save", false)) 
{
class OrderShipping_Save
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
