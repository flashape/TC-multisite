<?php

if (!class_exists("RelatedProductsTrans", false)) 
{
class RelatedProductsTrans
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
   * @var DataInt32 $relationID
   * @access public
   */
  public $relationID;

  /**
   * 
   * @var DataInt32 $firstItemID
   * @access public
   */
  public $firstItemID;

  /**
   * 
   * @var DataInt32 $secondItemID
   * @access public
   */
  public $secondItemID;

  /**
   * 
   * @var DataInt32 $sortOrder
   * @access public
   */
  public $sortOrder;

  /**
   * 
   * @var DataInt32 $hide
   * @access public
   */
  public $hide;

  /**
   * 
   * @var boolean $IsUpsell
   * @access public
   */
  public $IsUpsell;

  /**
   * 
   * @var boolean $UpsellFreeShipping
   * @access public
   */
  public $UpsellFreeShipping;

  /**
   * 
   * @var DataMoney $UpsellAdjustedPrice
   * @access public
   */
  public $UpsellAdjustedPrice;

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
   * @param DataInt32 $relationID
   * @param DataInt32 $firstItemID
   * @param DataInt32 $secondItemID
   * @param DataInt32 $sortOrder
   * @param DataInt32 $hide
   * @param boolean $IsUpsell
   * @param boolean $UpsellFreeShipping
   * @param DataMoney $UpsellAdjustedPrice
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $relationID, $firstItemID, $secondItemID, $sortOrder, $hide, $IsUpsell, $UpsellFreeShipping, $UpsellAdjustedPrice, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->relationID = $relationID;
    $this->firstItemID = $firstItemID;
    $this->secondItemID = $secondItemID;
    $this->sortOrder = $sortOrder;
    $this->hide = $hide;
    $this->IsUpsell = $IsUpsell;
    $this->UpsellFreeShipping = $UpsellFreeShipping;
    $this->UpsellAdjustedPrice = $UpsellAdjustedPrice;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
  }

}

}
