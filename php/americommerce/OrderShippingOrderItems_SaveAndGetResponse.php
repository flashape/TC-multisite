<?php

if (!class_exists("OrderShippingOrderItems_SaveAndGetResponse", false)) 
{
class OrderShippingOrderItems_SaveAndGetResponse
{

  /**
   * 
   * @var OrderShippingOrderItemsTrans $OrderShippingOrderItems_SaveAndGetResult
   * @access public
   */
  public $OrderShippingOrderItems_SaveAndGetResult;

  /**
   * 
   * @param OrderShippingOrderItemsTrans $OrderShippingOrderItems_SaveAndGetResult
   * @access public
   */
  public function __construct($OrderShippingOrderItems_SaveAndGetResult)
  {
    $this->OrderShippingOrderItems_SaveAndGetResult = $OrderShippingOrderItems_SaveAndGetResult;
  }

}

}
