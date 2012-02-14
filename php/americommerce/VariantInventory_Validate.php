<?php

if (!class_exists("VariantInventory_Validate", false)) 
{
class VariantInventory_Validate
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
