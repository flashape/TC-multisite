<?php

if (!class_exists("VariantInventory_SaveAndGetResponse", false)) 
{
class VariantInventory_SaveAndGetResponse
{

  /**
   * 
   * @var VariantInventoryTrans $VariantInventory_SaveAndGetResult
   * @access public
   */
  public $VariantInventory_SaveAndGetResult;

  /**
   * 
   * @param VariantInventoryTrans $VariantInventory_SaveAndGetResult
   * @access public
   */
  public function __construct($VariantInventory_SaveAndGetResult)
  {
    $this->VariantInventory_SaveAndGetResult = $VariantInventory_SaveAndGetResult;
  }

}

}
