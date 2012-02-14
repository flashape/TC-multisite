<?php

if (!class_exists("StoreShippingOptionsTrans", false)) 
{
class StoreShippingOptionsTrans
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
   * @var DataInt32 $ID
   * @access public
   */
  public $ID;

  /**
   * 
   * @var ShippingOptionType $Type
   * @access public
   */
  public $Type;

  /**
   * 
   * @var DataInt32 $TypeID
   * @access public
   */
  public $TypeID;

  /**
   * 
   * @var boolean $Inactive
   * @access public
   */
  public $Inactive;

  /**
   * 
   * @var DataInt32 $StoreID
   * @access public
   */
  public $StoreID;

  /**
   * 
   * @var DataMoney $MarkupAmount
   * @access public
   */
  public $MarkupAmount;

  /**
   * 
   * @var ShippingMarkupType $MarkupType
   * @access public
   */
  public $MarkupType;

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
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $ID
   * @param ShippingOptionType $Type
   * @param DataInt32 $TypeID
   * @param boolean $Inactive
   * @param DataInt32 $StoreID
   * @param DataMoney $MarkupAmount
   * @param ShippingMarkupType $MarkupType
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $ID, $Type, $TypeID, $Inactive, $StoreID, $MarkupAmount, $MarkupType, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->ID = $ID;
    $this->Type = $Type;
    $this->TypeID = $TypeID;
    $this->Inactive = $Inactive;
    $this->StoreID = $StoreID;
    $this->MarkupAmount = $MarkupAmount;
    $this->MarkupType = $MarkupType;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
  }

}

}
