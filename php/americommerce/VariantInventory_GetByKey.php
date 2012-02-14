<?php

if (!class_exists("VariantInventory_GetByKey", false)) 
{
class VariantInventory_GetByKey
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
