<?php

if (!class_exists("OrderStatus_GetByNameResponse", false)) 
{
class OrderStatus_GetByNameResponse
{

  /**
   * 
   * @var OrderStatusTrans $OrderStatus_GetByNameResult
   * @access public
   */
  public $OrderStatus_GetByNameResult;

  /**
   * 
   * @param OrderStatusTrans $OrderStatus_GetByNameResult
   * @access public
   */
  public function __construct($OrderStatus_GetByNameResult)
  {
    $this->OrderStatus_GetByNameResult = $OrderStatus_GetByNameResult;
  }

}

}
