<?php

if (!class_exists("OrderExtendedShipping_Validate", false)) 
{
class OrderExtendedShipping_Validate
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
