<?php

if (!class_exists("Product_Import", false)) 
{
class Product_Import
{

  /**
   * 
   * @var pdtProducts $pdtProducts
   * @access public
   */
  public $pdtProducts;

  /**
   * 
   * @var boolean $pbValidateOnly
   * @access public
   */
  public $pbValidateOnly;

  /**
   * 
   * @var int $piInventoryChangesApplyToStoreID
   * @access public
   */
  public $piInventoryChangesApplyToStoreID;

  /**
   * 
   * @param pdtProducts $pdtProducts
   * @param boolean $pbValidateOnly
   * @param int $piInventoryChangesApplyToStoreID
   * @access public
   */
  public function __construct($pdtProducts, $pbValidateOnly, $piInventoryChangesApplyToStoreID)
  {
    $this->pdtProducts = $pdtProducts;
    $this->pbValidateOnly = $pbValidateOnly;
    $this->piInventoryChangesApplyToStoreID = $piInventoryChangesApplyToStoreID;
  }

}

}
