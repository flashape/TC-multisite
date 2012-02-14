<?php

if (!class_exists("AdCode_ValidateResponse", false)) 
{
class AdCode_ValidateResponse
{

  /**
   * 
   * @var string $AdCode_ValidateResult
   * @access public
   */
  public $AdCode_ValidateResult;

  /**
   * 
   * @param string $AdCode_ValidateResult
   * @access public
   */
  public function __construct($AdCode_ValidateResult)
  {
    $this->AdCode_ValidateResult = $AdCode_ValidateResult;
  }

}

}
