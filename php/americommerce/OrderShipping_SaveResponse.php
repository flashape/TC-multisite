<?php

if (!class_exists("OrderShipping_SaveResponse", false)) 
{
class OrderShipping_SaveResponse
{

  /**
   * 
   * @var boolean $OrderShipping_SaveResult
   * @access public
   */
  public $OrderShipping_SaveResult;

  /**
   * 
   * @param boolean $OrderShipping_SaveResult
   * @access public
   */
  public function __construct($OrderShipping_SaveResult)
  {
    $this->OrderShipping_SaveResult = $OrderShipping_SaveResult;
  }

}

}
