<?php

if (!class_exists("OrderShipping_ExistsResponse", false)) 
{
class OrderShipping_ExistsResponse
{

  /**
   * 
   * @var boolean $OrderShipping_ExistsResult
   * @access public
   */
  public $OrderShipping_ExistsResult;

  /**
   * 
   * @param boolean $OrderShipping_ExistsResult
   * @access public
   */
  public function __construct($OrderShipping_ExistsResult)
  {
    $this->OrderShipping_ExistsResult = $OrderShipping_ExistsResult;
  }

}

}
