<?php

if (!class_exists("OrderItem_SaveResponse", false)) 
{
class OrderItem_SaveResponse
{

  /**
   * 
   * @var boolean $OrderItem_SaveResult
   * @access public
   */
  public $OrderItem_SaveResult;

  /**
   * 
   * @param boolean $OrderItem_SaveResult
   * @access public
   */
  public function __construct($OrderItem_SaveResult)
  {
    $this->OrderItem_SaveResult = $OrderItem_SaveResult;
  }

}

}
