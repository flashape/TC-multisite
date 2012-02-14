<?php

if (!class_exists("VariantInventory_Exists", false)) 
{
class VariantInventory_Exists
{

  /**
   * 
   * @var int $piVariantInventoryID
   * @access public
   */
  public $piVariantInventoryID;

  /**
   * 
   * @param int $piVariantInventoryID
   * @access public
   */
  public function __construct($piVariantInventoryID)
  {
    $this->piVariantInventoryID = $piVariantInventoryID;
  }

}

}
