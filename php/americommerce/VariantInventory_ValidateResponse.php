<?php

if (!class_exists("VariantInventory_ValidateResponse", false)) 
{
class VariantInventory_ValidateResponse
{

  /**
   * 
   * @var string $VariantInventory_ValidateResult
   * @access public
   */
  public $VariantInventory_ValidateResult;

  /**
   * 
   * @param string $VariantInventory_ValidateResult
   * @access public
   */
  public function __construct($VariantInventory_ValidateResult)
  {
    $this->VariantInventory_ValidateResult = $VariantInventory_ValidateResult;
  }

}

}
