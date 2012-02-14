<?php

if (!class_exists("ProductGroupRelationsTrans", false)) 
{
class ProductGroupRelationsTrans
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
   * @var DataInt32 $ProductGroupID
   * @access public
   */
  public $ProductGroupID;

  /**
   * 
   * @var DataInt32 $ParentProductID
   * @access public
   */
  public $ParentProductID;

  /**
   * 
   * @var DataInt32 $ChildProductID
   * @access public
   */
  public $ChildProductID;

  /**
   * 
   * @var DataInt32 $SortOrder
   * @access public
   */
  public $SortOrder;

  /**
   * 
   * @var boolean $IsDefaultChild
   * @access public
   */
  public $IsDefaultChild;

  /**
   * 
   * @var boolean $BindQuantityToParent
   * @access public
   */
  public $BindQuantityToParent;

  /**
   * 
   * @var boolean $IsRequired
   * @access public
   */
  public $IsRequired;

  /**
   * 
   * @var DataInt32 $AutoEntryLower
   * @access public
   */
  public $AutoEntryLower;

  /**
   * 
   * @var DataInt32 $AutoEntryUpper
   * @access public
   */
  public $AutoEntryUpper;

  /**
   * 
   * @var DataInt32 $RequiredQuantity
   * @access public
   */
  public $RequiredQuantity;

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
   * @var boolean $UseForFeed
   * @access public
   */
  public $UseForFeed;

  /**
   * 
   * @var boolean $ExcludeFromListPricing
   * @access public
   */
  public $ExcludeFromListPricing;

  /**
   * 
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $ProductGroupID
   * @param DataInt32 $ParentProductID
   * @param DataInt32 $ChildProductID
   * @param DataInt32 $SortOrder
   * @param boolean $IsDefaultChild
   * @param boolean $BindQuantityToParent
   * @param boolean $IsRequired
   * @param DataInt32 $AutoEntryLower
   * @param DataInt32 $AutoEntryUpper
   * @param DataInt32 $RequiredQuantity
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @param boolean $UseForFeed
   * @param boolean $ExcludeFromListPricing
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $ProductGroupID, $ParentProductID, $ChildProductID, $SortOrder, $IsDefaultChild, $BindQuantityToParent, $IsRequired, $AutoEntryLower, $AutoEntryUpper, $RequiredQuantity, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp, $UseForFeed, $ExcludeFromListPricing)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->ProductGroupID = $ProductGroupID;
    $this->ParentProductID = $ParentProductID;
    $this->ChildProductID = $ChildProductID;
    $this->SortOrder = $SortOrder;
    $this->IsDefaultChild = $IsDefaultChild;
    $this->BindQuantityToParent = $BindQuantityToParent;
    $this->IsRequired = $IsRequired;
    $this->AutoEntryLower = $AutoEntryLower;
    $this->AutoEntryUpper = $AutoEntryUpper;
    $this->RequiredQuantity = $RequiredQuantity;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
    $this->UseForFeed = $UseForFeed;
    $this->ExcludeFromListPricing = $ExcludeFromListPricing;
  }

}

}
