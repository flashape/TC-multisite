<?php

if (!class_exists("Cart_SaveResponse", false)) 
{
class Cart_SaveResponse
{

  /**
   * 
   * @var boolean $Cart_SaveResult
   * @access public
   */
  public $Cart_SaveResult;

  /**
   * 
   * @param boolean $Cart_SaveResult
   * @access public
   */
  public function __construct($Cart_SaveResult)
  {
    $this->Cart_SaveResult = $Cart_SaveResult;
  }

}

}
