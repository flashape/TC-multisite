<?php

if (!class_exists("Cart_DeleteResponse", false)) 
{
class Cart_DeleteResponse
{

  /**
   * 
   * @var boolean $Cart_DeleteResult
   * @access public
   */
  public $Cart_DeleteResult;

  /**
   * 
   * @param boolean $Cart_DeleteResult
   * @access public
   */
  public function __construct($Cart_DeleteResult)
  {
    $this->Cart_DeleteResult = $Cart_DeleteResult;
  }

}

}
