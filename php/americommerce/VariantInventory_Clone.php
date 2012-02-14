<?php

if (!class_exists("VariantInventory_Clone", false)) 
{
class VariantInventory_Clone
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
