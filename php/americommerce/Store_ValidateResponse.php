<?php

if (!class_exists("Store_ValidateResponse", false)) 
{
class Store_ValidateResponse
{

  /**
   * 
   * @var string $Store_ValidateResult
   * @access public
   */
  public $Store_ValidateResult;

  /**
   * 
   * @param string $Store_ValidateResult
   * @access public
   */
  public function __construct($Store_ValidateResult)
  {
    $this->Store_ValidateResult = $Store_ValidateResult;
  }

}

}
