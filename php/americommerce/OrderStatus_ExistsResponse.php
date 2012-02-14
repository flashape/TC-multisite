<?php

if (!class_exists("OrderStatus_ExistsResponse", false)) 
{
class OrderStatus_ExistsResponse
{

  /**
   * 
   * @var boolean $OrderStatus_ExistsResult
   * @access public
   */
  public $OrderStatus_ExistsResult;

  /**
   * 
   * @param boolean $OrderStatus_ExistsResult
   * @access public
   */
  public function __construct($OrderStatus_ExistsResult)
  {
    $this->OrderStatus_ExistsResult = $OrderStatus_ExistsResult;
  }

}

}
