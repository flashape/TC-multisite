<?php

if (!class_exists("VariantInventory_DeleteResponse", false)) 
{
class VariantInventory_DeleteResponse
{

  /**
   * 
   * @var boolean $VariantInventory_DeleteResult
   * @access public
   */
  public $VariantInventory_DeleteResult;

  /**
   * 
   * @param boolean $VariantInventory_DeleteResult
   * @access public
   */
  public function __construct($VariantInventory_DeleteResult)
  {
    $this->VariantInventory_DeleteResult = $VariantInventory_DeleteResult;
  }

}

}
