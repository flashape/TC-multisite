<?php

if (!class_exists("ProductVariantTrans", false)) 
{
class ProductVariantTrans
{

  /**
   * 
   * @var anyType $ParentPostingEntity
   * @access public
   */
  public $ParentPostingEntity;

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
   * @var DataInt32 $itemID
   * @access public
   */
  public $itemID;

  /**
   * 
   * @var DataInt32 $variantID
   * @access public
   */
  public $variantID;

  /**
   * 
   * @var DataInt32 $groupID
   * @access public
   */
  public $groupID;

  /**
   * 
   * @var string $shortDesc
   * @access public
   */
  public $shortDesc;

  /**
   * 
   * @var DataMoney $priceOffset
   * @access public
   */
  public $priceOffset;

  /**
   * 
   * @var string $offsetType
   * @access public
   */
  public $offsetType;

  /**
   * 
   * @var int $sortOrder
   * @access public
   */
  public $sortOrder;

  /**
   * 
   * @var string $itemNrExt
   * @access public
   */
  public $itemNrExt;

  /**
   * 
   * @var int $itemNrSortOrder
   * @access public
   */
  public $itemNrSortOrder;

  /**
   * 
   * @var boolean $hideFlag
   * @access public
   */
  public $hideFlag;

  /**
   * 
   * @var DataInt32 $showPriceOffset
   * @access public
   */
  public $showPriceOffset;

  /**
   * 
   * @var DataMoney $weight
   * @access public
   */
  public $weight;

  /**
   * 
   * @var string $weightType
   * @access public
   */
  public $weightType;

  /**
   * 
   * @var DataInt32 $ProductAttributeID
   * @access public
   */
  public $ProductAttributeID;

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
   * @var boolean $DefaultSelection
   * @access public
   */
  public $DefaultSelection;

  /**
   * 
   * @var string $SwatchFile
   * @access public
   */
  public $SwatchFile;

  /**
   * 
   * @var string $SwatchThumb
   * @access public
   */
  public $SwatchThumb;

  /**
   * 
   * @var array $VariantPackageColTrans
   * @access public
   */
  public $VariantPackageColTrans;

  /**
   * 
   * @var VariantInventoryVariantsTrans $VariantInventoryVariantsTrans
   * @access public
   */
  public $VariantInventoryVariantsTrans;

  /**
   * 
   * @param anyType $ParentPostingEntity
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $itemID
   * @param DataInt32 $variantID
   * @param DataInt32 $groupID
   * @param string $shortDesc
   * @param DataMoney $priceOffset
   * @param string $offsetType
   * @param int $sortOrder
   * @param string $itemNrExt
   * @param int $itemNrSortOrder
   * @param boolean $hideFlag
   * @param DataInt32 $showPriceOffset
   * @param DataMoney $weight
   * @param string $weightType
   * @param DataInt32 $ProductAttributeID
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @param boolean $DefaultSelection
   * @param string $SwatchFile
   * @param string $SwatchThumb
   * @param array $VariantPackageColTrans
   * @param VariantInventoryVariantsTrans $VariantInventoryVariantsTrans
   * @access public
   */
  public function __construct($ParentPostingEntity, $IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $itemID, $variantID, $groupID, $shortDesc, $priceOffset, $offsetType, $sortOrder, $itemNrExt, $itemNrSortOrder, $hideFlag, $showPriceOffset, $weight, $weightType, $ProductAttributeID, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp, $DefaultSelection, $SwatchFile, $SwatchThumb, $VariantPackageColTrans, $VariantInventoryVariantsTrans)
  {
    $this->ParentPostingEntity = $ParentPostingEntity;
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->itemID = $itemID;
    $this->variantID = $variantID;
    $this->groupID = $groupID;
    $this->shortDesc = $shortDesc;
    $this->priceOffset = $priceOffset;
    $this->offsetType = $offsetType;
    $this->sortOrder = $sortOrder;
    $this->itemNrExt = $itemNrExt;
    $this->itemNrSortOrder = $itemNrSortOrder;
    $this->hideFlag = $hideFlag;
    $this->showPriceOffset = $showPriceOffset;
    $this->weight = $weight;
    $this->weightType = $weightType;
    $this->ProductAttributeID = $ProductAttributeID;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
    $this->DefaultSelection = $DefaultSelection;
    $this->SwatchFile = $SwatchFile;
    $this->SwatchThumb = $SwatchThumb;
    $this->VariantPackageColTrans = $VariantPackageColTrans;
    $this->VariantInventoryVariantsTrans = $VariantInventoryVariantsTrans;
  }

}

}
