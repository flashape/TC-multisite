<?php

if (!class_exists("VariantInventory_GetByVariantInventoryItemNumber", false)) 
{
class VariantInventory_GetByVariantInventoryItemNumber
{

  /**
   * 
   * @var string $psVariantInventoryItemNumber
   * @access public
   */
  public $psVariantInventoryItemNumber;

  /**
   * 
   * @param string $psVariantInventoryItemNumber
   * @access public
   */
  public function __construct($psVariantInventoryItemNumber)
  {
    $this->psVariantInventoryItemNumber = $psVariantInventoryItemNumber;
  }

}

}
