<?php

if (!class_exists("VariantInventory_Save", false)) 
{
class VariantInventory_Save
{

  /**
   * 
   * @var VariantInventoryTrans $poVariantInventoryTrans
   * @access public
   */
  public $poVariantInventoryTrans;

  /**
   * 
   * @param VariantInventoryTrans $poVariantInventoryTrans
   * @access public
   */
  public function __construct($poVariantInventoryTrans)
  {
    $this->poVariantInventoryTrans = $poVariantInventoryTrans;
  }

}

}
