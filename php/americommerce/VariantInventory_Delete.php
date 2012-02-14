<?php

if (!class_exists("VariantInventory_Delete", false)) 
{
class VariantInventory_Delete
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
