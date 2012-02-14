<?php

if (!class_exists("Cart_ExistsResponse", false)) 
{
class Cart_ExistsResponse
{

  /**
   * 
   * @var boolean $Cart_ExistsResult
   * @access public
   */
  public $Cart_ExistsResult;

  /**
   * 
   * @param boolean $Cart_ExistsResult
   * @access public
   */
  public function __construct($Cart_ExistsResult)
  {
    $this->Cart_ExistsResult = $Cart_ExistsResult;
  }

}

}
