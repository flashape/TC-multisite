<?php

if (!class_exists("ActiveInStore_ValidateResponse", false)) 
{
class ActiveInStore_ValidateResponse
{

  /**
   * 
   * @var string $ActiveInStore_ValidateResult
   * @access public
   */
  public $ActiveInStore_ValidateResult;

  /**
   * 
   * @param string $ActiveInStore_ValidateResult
   * @access public
   */
  public function __construct($ActiveInStore_ValidateResult)
  {
    $this->ActiveInStore_ValidateResult = $ActiveInStore_ValidateResult;
  }

}

}
