<?php

if (!class_exists("OrderShippingOrderItems_ExistsResponse", false)) 
{
class OrderShippingOrderItems_ExistsResponse
{

  /**
   * 
   * @var boolean $OrderShippingOrderItems_ExistsResult
   * @access public
   */
  public $OrderShippingOrderItems_ExistsResult;

  /**
   * 
   * @param boolean $OrderShippingOrderItems_ExistsResult
   * @access public
   */
  public function __construct($OrderShippingOrderItems_ExistsResult)
  {
    $this->OrderShippingOrderItems_ExistsResult = $OrderShippingOrderItems_ExistsResult;
  }

}

}
