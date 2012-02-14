<?php

if (!class_exists("PriceRuleTrans", false)) 
{
class PriceRuleTrans
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
   * @var DataInt32 $PriceRuleID
   * @access public
   */
  public $PriceRuleID;

  /**
   * 
   * @var DataInt32 $PriceCalculationID
   * @access public
   */
  public $PriceCalculationID;

  /**
   * 
   * @var DataInt32 $CustomerTypeID
   * @access public
   */
  public $CustomerTypeID;

  /**
   * 
   * @var DataInt32 $StoreID
   * @access public
   */
  public $StoreID;

  /**
   * 
   * @var DataInt32 $QuantityStarting
   * @access public
   */
  public $QuantityStarting;

  /**
   * 
   * @var CalculationPriceBase $PriceBasedOffOf
   * @access public
   */
  public $PriceBasedOffOf;

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
   * @var array $PriceRuleModifierColTrans
   * @access public
   */
  public $PriceRuleModifierColTrans;

  /**
   * 
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $PriceRuleID
   * @param DataInt32 $PriceCalculationID
   * @param DataInt32 $CustomerTypeID
   * @param DataInt32 $StoreID
   * @param DataInt32 $QuantityStarting
   * @param CalculationPriceBase $PriceBasedOffOf
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @param array $PriceRuleModifierColTrans
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $PriceRuleID, $PriceCalculationID, $CustomerTypeID, $StoreID, $QuantityStarting, $PriceBasedOffOf, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp, $PriceRuleModifierColTrans)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->PriceRuleID = $PriceRuleID;
    $this->PriceCalculationID = $PriceCalculationID;
    $this->CustomerTypeID = $CustomerTypeID;
    $this->StoreID = $StoreID;
    $this->QuantityStarting = $QuantityStarting;
    $this->PriceBasedOffOf = $PriceBasedOffOf;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
    $this->PriceRuleModifierColTrans = $PriceRuleModifierColTrans;
  }

}

}
