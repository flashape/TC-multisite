<?php

if (!class_exists("OrderStatus_GetAllResponse", false)) 
{
class OrderStatus_GetAllResponse
{

  /**
   * 
   * @var array $OrderStatus_GetAllResult
   * @access public
   */
  public $OrderStatus_GetAllResult;

  /**
   * 
   * @param array $OrderStatus_GetAllResult
   * @access public
   */
  public function __construct($OrderStatus_GetAllResult)
  {
    $this->OrderStatus_GetAllResult = $OrderStatus_GetAllResult;
  }

}

}
