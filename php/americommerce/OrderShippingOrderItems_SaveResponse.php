<?php

if (!class_exists("OrderShippingOrderItems_SaveResponse", false)) 
{
class OrderShippingOrderItems_SaveResponse
{

  /**
   * 
   * @var boolean $OrderShippingOrderItems_SaveResult
   * @access public
   */
  public $OrderShippingOrderItems_SaveResult;

  /**
   * 
   * @param boolean $OrderShippingOrderItems_SaveResult
   * @access public
   */
  public function __construct($OrderShippingOrderItems_SaveResult)
  {
    $this->OrderShippingOrderItems_SaveResult = $OrderShippingOrderItems_SaveResult;
  }

}

}
