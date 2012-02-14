<?php

if (!class_exists("StoreCardTypeTrans", false)) 
{
class StoreCardTypeTrans
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
   * @var DataInt32 $StoreCardTypeID
   * @access public
   */
  public $StoreCardTypeID;

  /**
   * 
   * @var DataInt32 $StoreID
   * @access public
   */
  public $StoreID;

  /**
   * 
   * @var DataInt32 $cctypeID
   * @access public
   */
  public $cctypeID;

  /**
   * 
   * @var boolean $hide
   * @access public
   */
  public $hide;

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
   * @var PaymentMethodCostModifierType $MarkupType
   * @access public
   */
  public $MarkupType;

  /**
   * 
   * @var DataMoney $MarkupAmount
   * @access public
   */
  public $MarkupAmount;

  /**
   * 
   * @var DataInt32 $SortOrder
   * @access public
   */
  public $SortOrder;

  /**
   * 
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $StoreCardTypeID
   * @param DataInt32 $StoreID
   * @param DataInt32 $cctypeID
   * @param boolean $hide
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @param PaymentMethodCostModifierType $MarkupType
   * @param DataMoney $MarkupAmount
   * @param DataInt32 $SortOrder
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $StoreCardTypeID, $StoreID, $cctypeID, $hide, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp, $MarkupType, $MarkupAmount, $SortOrder)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->StoreCardTypeID = $StoreCardTypeID;
    $this->StoreID = $StoreID;
    $this->cctypeID = $cctypeID;
    $this->hide = $hide;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
    $this->MarkupType = $MarkupType;
    $this->MarkupAmount = $MarkupAmount;
    $this->SortOrder = $SortOrder;
  }

}

}
