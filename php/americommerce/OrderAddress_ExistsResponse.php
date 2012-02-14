<?php

if (!class_exists("OrderAddress_ExistsResponse", false)) 
{
class OrderAddress_ExistsResponse
{

  /**
   * 
   * @var boolean $OrderAddress_ExistsResult
   * @access public
   */
  public $OrderAddress_ExistsResult;

  /**
   * 
   * @param boolean $OrderAddress_ExistsResult
   * @access public
   */
  public function __construct($OrderAddress_ExistsResult)
  {
    $this->OrderAddress_ExistsResult = $OrderAddress_ExistsResult;
  }

}

}
