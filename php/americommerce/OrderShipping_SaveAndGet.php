<?php

if (!class_exists("OrderShipping_SaveAndGet", false)) 
{
class OrderShipping_SaveAndGet
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
