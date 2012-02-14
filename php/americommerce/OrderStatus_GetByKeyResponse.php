<?php

if (!class_exists("OrderStatus_GetByKeyResponse", false)) 
{
class OrderStatus_GetByKeyResponse
{

  /**
   * 
   * @var OrderStatusTrans $OrderStatus_GetByKeyResult
   * @access public
   */
  public $OrderStatus_GetByKeyResult;

  /**
   * 
   * @param OrderStatusTrans $OrderStatus_GetByKeyResult
   * @access public
   */
  public function __construct($OrderStatus_GetByKeyResult)
  {
    $this->OrderStatus_GetByKeyResult = $OrderStatus_GetByKeyResult;
  }

}

}
