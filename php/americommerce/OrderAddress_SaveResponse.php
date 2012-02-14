<?php

if (!class_exists("OrderAddress_SaveResponse", false)) 
{
class OrderAddress_SaveResponse
{

  /**
   * 
   * @var boolean $OrderAddress_SaveResult
   * @access public
   */
  public $OrderAddress_SaveResult;

  /**
   * 
   * @param boolean $OrderAddress_SaveResult
   * @access public
   */
  public function __construct($OrderAddress_SaveResult)
  {
    $this->OrderAddress_SaveResult = $OrderAddress_SaveResult;
  }

}

}
