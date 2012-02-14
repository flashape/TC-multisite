<?php

if (!class_exists("OrderShipping_Validate", false)) 
{
class OrderShipping_Validate
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
