<?php

if (!class_exists("OrderStatus_GetByName", false)) 
{
class OrderStatus_GetByName
{

  /**
   * 
   * @var string $psOrderStatusName
   * @access public
   */
  public $psOrderStatusName;

  /**
   * 
   * @param string $psOrderStatusName
   * @access public
   */
  public function __construct($psOrderStatusName)
  {
    $this->psOrderStatusName = $psOrderStatusName;
  }

}

}
