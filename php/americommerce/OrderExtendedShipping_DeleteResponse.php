<?php

if (!class_exists("OrderExtendedShipping_DeleteResponse", false)) 
{
class OrderExtendedShipping_DeleteResponse
{

  /**
   * 
   * @var boolean $OrderExtendedShipping_DeleteResult
   * @access public
   */
  public $OrderExtendedShipping_DeleteResult;

  /**
   * 
   * @param boolean $OrderExtendedShipping_DeleteResult
   * @access public
   */
  public function __construct($OrderExtendedShipping_DeleteResult)
  {
    $this->OrderExtendedShipping_DeleteResult = $OrderExtendedShipping_DeleteResult;
  }

}

}
