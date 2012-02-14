<?php

if (!class_exists("OrderStatus_DeleteResponse", false)) 
{
class OrderStatus_DeleteResponse
{

  /**
   * 
   * @var boolean $OrderStatus_DeleteResult
   * @access public
   */
  public $OrderStatus_DeleteResult;

  /**
   * 
   * @param boolean $OrderStatus_DeleteResult
   * @access public
   */
  public function __construct($OrderStatus_DeleteResult)
  {
    $this->OrderStatus_DeleteResult = $OrderStatus_DeleteResult;
  }

}

}
