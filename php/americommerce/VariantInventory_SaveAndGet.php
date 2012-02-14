<?php

if (!class_exists("VariantInventory_SaveAndGet", false)) 
{
class VariantInventory_SaveAndGet
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
