<?php

if (!class_exists("OrderShipping_DeleteResponse", false)) 
{
class OrderShipping_DeleteResponse
{

  /**
   * 
   * @var boolean $OrderShipping_DeleteResult
   * @access public
   */
  public $OrderShipping_DeleteResult;

  /**
   * 
   * @param boolean $OrderShipping_DeleteResult
   * @access public
   */
  public function __construct($OrderShipping_DeleteResult)
  {
    $this->OrderShipping_DeleteResult = $OrderShipping_DeleteResult;
  }

}

}
