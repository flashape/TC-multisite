<?php

if (!class_exists("OrderStatus_SaveAndGetResponse", false)) 
{
class OrderStatus_SaveAndGetResponse
{

  /**
   * 
   * @var OrderStatusTrans $OrderStatus_SaveAndGetResult
   * @access public
   */
  public $OrderStatus_SaveAndGetResult;

  /**
   * 
   * @param OrderStatusTrans $OrderStatus_SaveAndGetResult
   * @access public
   */
  public function __construct($OrderStatus_SaveAndGetResult)
  {
    $this->OrderStatus_SaveAndGetResult = $OrderStatus_SaveAndGetResult;
  }

}

}
