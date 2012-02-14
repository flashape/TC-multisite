<?php

if (!class_exists("OrderExtendedShipping_Save", false)) 
{
class OrderExtendedShipping_Save
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
