<?php

if (!class_exists("VariantInventory_GetByKeyResponse", false)) 
{
class VariantInventory_GetByKeyResponse
{

  /**
   * 
   * @var VariantInventoryTrans $VariantInventory_GetByKeyResult
   * @access public
   */
  public $VariantInventory_GetByKeyResult;

  /**
   * 
   * @param VariantInventoryTrans $VariantInventory_GetByKeyResult
   * @access public
   */
  public function __construct($VariantInventory_GetByKeyResult)
  {
    $this->VariantInventory_GetByKeyResult = $VariantInventory_GetByKeyResult;
  }

}

}
