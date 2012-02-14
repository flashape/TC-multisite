<?php

if (!class_exists("CartInfo_ValidateResponse", false)) 
{
class CartInfo_ValidateResponse
{

  /**
   * 
   * @var string $CartInfo_ValidateResult
   * @access public
   */
  public $CartInfo_ValidateResult;

  /**
   * 
   * @param string $CartInfo_ValidateResult
   * @access public
   */
  public function __construct($CartInfo_ValidateResult)
  {
    $this->CartInfo_ValidateResult = $CartInfo_ValidateResult;
  }

}

}
