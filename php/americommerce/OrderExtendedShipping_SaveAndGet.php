<?php

if (!class_exists("OrderExtendedShipping_SaveAndGet", false)) 
{
class OrderExtendedShipping_SaveAndGet
{

  /**
   * 
   * @var OrderExtendedShippingTrans $poOrderExtendedShippingTrans
   * @access public
   */
  public $poOrderExtendedShippingTrans;

  /**
   * 
   * @param OrderExtendedShippingTrans $poOrderExtendedShippingTrans
   * @access public
   */
  public function __construct($poOrderExtendedShippingTrans)
  {
    $this->poOrderExtendedShippingTrans = $poOrderExtendedShippingTrans;
  }

}

}
