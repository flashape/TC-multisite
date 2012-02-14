<?php

if (!class_exists("Cart_ClearCartResponse", false)) 
{
class Cart_ClearCartResponse
{

  /**
   * 
   * @var boolean $Cart_ClearCartResult
   * @access public
   */
  public $Cart_ClearCartResult;

  /**
   * 
   * @param boolean $Cart_ClearCartResult
   * @access public
   */
  public function __construct($Cart_ClearCartResult)
  {
    $this->Cart_ClearCartResult = $Cart_ClearCartResult;
  }

}

}
