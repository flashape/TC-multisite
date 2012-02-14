<?php

if (!class_exists("VariantInventory_ExistsResponse", false)) 
{
class VariantInventory_ExistsResponse
{

  /**
   * 
   * @var boolean $VariantInventory_ExistsResult
   * @access public
   */
  public $VariantInventory_ExistsResult;

  /**
   * 
   * @param boolean $VariantInventory_ExistsResult
   * @access public
   */
  public function __construct($VariantInventory_ExistsResult)
  {
    $this->VariantInventory_ExistsResult = $VariantInventory_ExistsResult;
  }

}

}
