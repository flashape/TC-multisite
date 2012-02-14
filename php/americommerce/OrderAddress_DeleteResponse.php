<?php

if (!class_exists("OrderAddress_DeleteResponse", false)) 
{
class OrderAddress_DeleteResponse
{

  /**
   * 
   * @var boolean $OrderAddress_DeleteResult
   * @access public
   */
  public $OrderAddress_DeleteResult;

  /**
   * 
   * @param boolean $OrderAddress_DeleteResult
   * @access public
   */
  public function __construct($OrderAddress_DeleteResult)
  {
    $this->OrderAddress_DeleteResult = $OrderAddress_DeleteResult;
  }

}

}
