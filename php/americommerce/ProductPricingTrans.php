<?php

if (!class_exists("ProductPricingTrans", false)) 
{
class ProductPricingTrans
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
   * @var DataInt32 $ProductPricingID
   * @access public
   */
  public $ProductPricingID;

  /**
   * 
   * @var DataInt32 $ItemID
   * @access public
   */
  public $ItemID;

  /**
   * 
   * @var DataInt32 $StoreID
   * @access public
   */
  public $StoreID;

  /**
   * 
   * @var DataInt32 $CustomerTypeID
   * @access public
   */
  public $CustomerTypeID;

  /**
   * 
   * @var DataInt32 $VariantInventoryID
   * @access public
   */
  public $VariantInventoryID;

  /**
   * 
   * @var DataInt32 $SaleTypeID
   * @access public
   */
  public $SaleTypeID;

  /**
   * 
   * @var DataDateTime $StartDate
   * @access public
   */
  public $StartDate;

  /**
   * 
   * @var DataDateTime $EndDate
   * @access public
   */
  public $EndDate;

  /**
   * 
   * @var DataInt32 $StartingQuantity
   * @access public
   */
  public $StartingQuantity;

  /**
   * 
   * @var DataMoney $Price
   * @access public
   */
  public $Price;

  /**
   * 
   * @var DataMoney $Cost
   * @access public
   */
  public $Cost;

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
   * @var DataInt32 $PriceCalculationID
   * @access public
   */
  public $PriceCalculationID;

  /**
   * 
   * @var DataInt32 $VariantID
   * @access public
   */
  public $VariantID;

  /**
   * 
   * @var string $VariantPriceSurcharge
   * @access public
   */
  public $VariantPriceSurcharge;

  /**
   * 
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $ProductPricingID
   * @param DataInt32 $ItemID
   * @param DataInt32 $StoreID
   * @param DataInt32 $CustomerTypeID
   * @param DataInt32 $VariantInventoryID
   * @param DataInt32 $SaleTypeID
   * @param DataDateTime $StartDate
   * @param DataDateTime $EndDate
   * @param DataInt32 $StartingQuantity
   * @param DataMoney $Price
   * @param DataMoney $Cost
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @param DataInt32 $PriceCalculationID
   * @param DataInt32 $VariantID
   * @param string $VariantPriceSurcharge
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $ProductPricingID, $ItemID, $StoreID, $CustomerTypeID, $VariantInventoryID, $SaleTypeID, $StartDate, $EndDate, $StartingQuantity, $Price, $Cost, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp, $PriceCalculationID, $VariantID, $VariantPriceSurcharge)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->ProductPricingID = $ProductPricingID;
    $this->ItemID = $ItemID;
    $this->StoreID = $StoreID;
    $this->CustomerTypeID = $CustomerTypeID;
    $this->VariantInventoryID = $VariantInventoryID;
    $this->SaleTypeID = $SaleTypeID;
    $this->StartDate = $StartDate;
    $this->EndDate = $EndDate;
    $this->StartingQuantity = $StartingQuantity;
    $this->Price = $Price;
    $this->Cost = $Cost;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
    $this->PriceCalculationID = $PriceCalculationID;
    $this->VariantID = $VariantID;
    $this->VariantPriceSurcharge = $VariantPriceSurcharge;
  }

}

}
