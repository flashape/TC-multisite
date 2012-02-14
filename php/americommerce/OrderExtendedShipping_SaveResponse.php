<?php

if (!class_exists("OrderExtendedShipping_SaveResponse", false)) 
{
class OrderExtendedShipping_SaveResponse
{

  /**
   * 
   * @var boolean $OrderExtendedShipping_SaveResult
   * @access public
   */
  public $OrderExtendedShipping_SaveResult;

  /**
   * 
   * @param boolean $OrderExtendedShipping_SaveResult
   * @access public
   */
  public function __construct($OrderExtendedShipping_SaveResult)
  {
    $this->OrderExtendedShipping_SaveResult = $OrderExtendedShipping_SaveResult;
  }

}

}
