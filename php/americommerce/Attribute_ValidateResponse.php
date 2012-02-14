<?php

if (!class_exists("Attribute_ValidateResponse", false)) 
{
class Attribute_ValidateResponse
{

  /**
   * 
   * @var string $Attribute_ValidateResult
   * @access public
   */
  public $Attribute_ValidateResult;

  /**
   * 
   * @param string $Attribute_ValidateResult
   * @access public
   */
  public function __construct($Attribute_ValidateResult)
  {
    $this->Attribute_ValidateResult = $Attribute_ValidateResult;
  }

}

}
