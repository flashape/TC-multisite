<?php

if (!class_exists("OrderItem_GetByKeyResponse", false)) 
{
class OrderItem_GetByKeyResponse
{

  /**
   * 
   * @var OrderItemTrans $OrderItem_GetByKeyResult
   * @access public
   */
  public $OrderItem_GetByKeyResult;

  /**
   * 
   * @param OrderItemTrans $OrderItem_GetByKeyResult
   * @access public
   */
  public function __construct($OrderItem_GetByKeyResult)
  {
    $this->OrderItem_GetByKeyResult = $OrderItem_GetByKeyResult;
  }

}

}
