<?php

if (!class_exists("OrderItem_DeleteResponse", false)) 
{
class OrderItem_DeleteResponse
{

  /**
   * 
   * @var boolean $OrderItem_DeleteResult
   * @access public
   */
  public $OrderItem_DeleteResult;

  /**
   * 
   * @param boolean $OrderItem_DeleteResult
   * @access public
   */
  public function __construct($OrderItem_DeleteResult)
  {
    $this->OrderItem_DeleteResult = $OrderItem_DeleteResult;
  }

}

}
