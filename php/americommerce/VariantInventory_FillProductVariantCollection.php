<?php

if (!class_exists("VariantInventory_FillProductVariantCollection", false)) 
{
class VariantInventory_FillProductVariantCollection
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
