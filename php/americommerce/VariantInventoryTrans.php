<?php

if (!class_exists("VariantInventoryTrans", false)) 
{
class VariantInventoryTrans
{

  /**
   * 
   * @var boolean $IsNew
   * @access public
   */
  public $IsNew;

  /**
   * 
   * @var boolean $MarkedToDelete
   * @access public
   */
  public $MarkedToDelete;

  /**
   * 
   * @var boolean $MarkedToDetach
   * @access public
   */
  public $MarkedToDetach;

  /**
   * 
   * @var Dictionary $AdditionalData
   * @access public
   */
  public $AdditionalData;

  /**
   * 
   * @var DataInt32 $VariantInventoryID
   * @access public
   */
  public $VariantInventoryID;

  /**
   * 
   * @var DataInt32 $ItemID
   * @access public
   */
  public $ItemID;

  /**
   * 
   * @var DataInt32 $Inventory
   * @access public
   */
  public $Inventory;

  /**
   * 
   * @var string $ItemNumber
   * @access public
   */
  public $ItemNumber;

  /**
   * 
   * @var string $ManufacturerItemNumber
   * @access public
   */
  public $ManufacturerItemNumber;

  /**
   * 
   * @var DataMoney $Weight
   * @access public
   */
  public $Weight;

  /**
   * 
   * @var DataInt32 $ProductStatusID
   * @access public
   */
  public $ProductStatusID;

  /**
   * 
   * @var string $QBListID
   * @access public
   */
  public $QBListID;

  /**
   * 
   * @var boolean $QBIsGroup
   * @access public
   */
  public $QBIsGroup;

  /**
   * 
   * @var DataDateTime $EditDate
   * @access public
   */
  public $EditDate;

  /**
   * 
   * @var string $EditedBy
   * @access public
   */
  public $EditedBy;

  /**
   * 
   * @var DataDateTime $EnterDate
   * @access public
   */
  public $EnterDate;

  /**
   * 
   * @var string $EnteredBy
   * @access public
   */
  public $EnteredBy;

  /**
   * 
   * @var base64Binary $DateTimeStamp
   * @access public
   */
  public $DateTimeStamp;

  /**
   * 
   * @var DataInt32 $LowStockWarningAt
   * @access public
   */
  public $LowStockWarningAt;

  /**
   * 
   * @var boolean $LowStockWarningEnabled
   * @access public
   */
  public $LowStockWarningEnabled;

  /**
   * 
   * @var array $ProductPricingColTrans
   * @access public
   */
  public $ProductPricingColTrans;

  /**
   * 
   * @var array $ProductVariantColTrans
   * @access public
   */
  public $ProductVariantColTrans;

  /**
   * 
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $VariantInventoryID
   * @param DataInt32 $ItemID
   * @param DataInt32 $Inventory
   * @param string $ItemNumber
   * @param string $ManufacturerItemNumber
   * @param DataMoney $Weight
   * @param DataInt32 $ProductStatusID
   * @param string $QBListID
   * @param boolean $QBIsGroup
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @param DataInt32 $LowStockWarningAt
   * @param boolean $LowStockWarningEnabled
   * @param array $ProductPricingColTrans
   * @param array $ProductVariantColTrans
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $VariantInventoryID, $ItemID, $Inventory, $ItemNumber, $ManufacturerItemNumber, $Weight, $ProductStatusID, $QBListID, $QBIsGroup, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp, $LowStockWarningAt, $LowStockWarningEnabled, $ProductPricingColTrans, $ProductVariantColTrans)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->VariantInventoryID = $VariantInventoryID;
    $this->ItemID = $ItemID;
    $this->Inventory = $Inventory;
    $this->ItemNumber = $ItemNumber;
    $this->ManufacturerItemNumber = $ManufacturerItemNumber;
    $this->Weight = $Weight;
    $this->ProductStatusID = $ProductStatusID;
    $this->QBListID = $QBListID;
    $this->QBIsGroup = $QBIsGroup;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
    $this->LowStockWarningAt = $LowStockWarningAt;
    $this->LowStockWarningEnabled = $LowStockWarningEnabled;
    $this->ProductPricingColTrans = $ProductPricingColTrans;
    $this->ProductVariantColTrans = $ProductVariantColTrans;
  }

}

}
