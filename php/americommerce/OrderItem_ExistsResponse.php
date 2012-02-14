<?php

if (!class_exists("OrderItem_ExistsResponse", false)) 
{
class OrderItem_ExistsResponse
{

  /**
   * 
   * @var boolean $OrderItem_ExistsResult
   * @access public
   */
  public $OrderItem_ExistsResult;

  /**
   * 
   * @param boolean $OrderItem_ExistsResult
   * @access public
   */
  public function __construct($OrderItem_ExistsResult)
  {
    $this->OrderItem_ExistsResult = $OrderItem_ExistsResult;
  }

}

}
