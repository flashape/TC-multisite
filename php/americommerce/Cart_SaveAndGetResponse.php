<?php

if (!class_exists("Cart_SaveAndGetResponse", false)) 
{
class Cart_SaveAndGetResponse
{

  /**
   * 
   * @var CartTrans $Cart_SaveAndGetResult
   * @access public
   */
  public $Cart_SaveAndGetResult;

  /**
   * 
   * @param CartTrans $Cart_SaveAndGetResult
   * @access public
   */
  public function __construct($Cart_SaveAndGetResult)
  {
    $this->Cart_SaveAndGetResult = $Cart_SaveAndGetResult;
  }

}

}
