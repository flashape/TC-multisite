<?php

if (!class_exists("VariantInventory_SaveResponse", false)) 
{
class VariantInventory_SaveResponse
{

  /**
   * 
   * @var boolean $VariantInventory_SaveResult
   * @access public
   */
  public $VariantInventory_SaveResult;

  /**
   * 
   * @param boolean $VariantInventory_SaveResult
   * @access public
   */
  public function __construct($VariantInventory_SaveResult)
  {
    $this->VariantInventory_SaveResult = $VariantInventory_SaveResult;
  }

}

}
