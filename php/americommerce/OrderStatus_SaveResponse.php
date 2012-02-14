<?php

if (!class_exists("OrderStatus_SaveResponse", false)) 
{
class OrderStatus_SaveResponse
{

  /**
   * 
   * @var boolean $OrderStatus_SaveResult
   * @access public
   */
  public $OrderStatus_SaveResult;

  /**
   * 
   * @param boolean $OrderStatus_SaveResult
   * @access public
   */
  public function __construct($OrderStatus_SaveResult)
  {
    $this->OrderStatus_SaveResult = $OrderStatus_SaveResult;
  }

}

}
