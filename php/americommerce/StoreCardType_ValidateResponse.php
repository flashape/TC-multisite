<?php

if (!class_exists("StoreCardType_ValidateResponse", false)) 
{
class StoreCardType_ValidateResponse
{

  /**
   * 
   * @var string $StoreCardType_ValidateResult
   * @access public
   */
  public $StoreCardType_ValidateResult;

  /**
   * 
   * @param string $StoreCardType_ValidateResult
   * @access public
   */
  public function __construct($StoreCardType_ValidateResult)
  {
    $this->StoreCardType_ValidateResult = $StoreCardType_ValidateResult;
  }

}

}
