<?php

if (!class_exists("VariantInventory_FillProductPricingCollection", false)) 
{
class VariantInventory_FillProductPricingCollection
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
