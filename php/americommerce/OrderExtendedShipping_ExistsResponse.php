<?php

if (!class_exists("OrderExtendedShipping_ExistsResponse", false)) 
{
class OrderExtendedShipping_ExistsResponse
{

  /**
   * 
   * @var boolean $OrderExtendedShipping_ExistsResult
   * @access public
   */
  public $OrderExtendedShipping_ExistsResult;

  /**
   * 
   * @param boolean $OrderExtendedShipping_ExistsResult
   * @access public
   */
  public function __construct($OrderExtendedShipping_ExistsResult)
  {
    $this->OrderExtendedShipping_ExistsResult = $OrderExtendedShipping_ExistsResult;
  }

}

}
