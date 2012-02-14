<?php

if (!class_exists("VariantInventory_CloneResponse", false)) 
{
class VariantInventory_CloneResponse
{

  /**
   * 
   * @var VariantInventoryTrans $VariantInventory_CloneResult
   * @access public
   */
  public $VariantInventory_CloneResult;

  /**
   * 
   * @param VariantInventoryTrans $VariantInventory_CloneResult
   * @access public
   */
  public function __construct($VariantInventory_CloneResult)
  {
    $this->VariantInventory_CloneResult = $VariantInventory_CloneResult;
  }

}

}
