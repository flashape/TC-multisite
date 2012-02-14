<?php

if (!class_exists("OrderShippingOrderItems_GetByKeyResponse", false)) 
{
class OrderShippingOrderItems_GetByKeyResponse
{

  /**
   * 
   * @var OrderShippingOrderItemsTrans $OrderShippingOrderItems_GetByKeyResult
   * @access public
   */
  public $OrderShippingOrderItems_GetByKeyResult;

  /**
   * 
   * @param OrderShippingOrderItemsTrans $OrderShippingOrderItems_GetByKeyResult
   * @access public
   */
  public function __construct($OrderShippingOrderItems_GetByKeyResult)
  {
    $this->OrderShippingOrderItems_GetByKeyResult = $OrderShippingOrderItems_GetByKeyResult;
  }

}

}
