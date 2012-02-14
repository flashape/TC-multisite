<?php

if (!class_exists("ShippingRuleTrans", false)) 
{
class ShippingRuleTrans
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
   * @var DataInt32 $shippingRuleID
   * @access public
   */
  public $shippingRuleID;

  /**
   * 
   * @var DataInt32 $shippingMethodID
   * @access public
   */
  public $shippingMethodID;

  /**
   * 
   * @var DataDecimal $lbound
   * @access public
   */
  public $lbound;

  /**
   * 
   * @var DataDecimal $ubound
   * @access public
   */
  public $ubound;

  /**
   * 
   * @var string $type
   * @access public
   */
  public $type;

  /**
   * 
   * @var DataMoney $amount
   * @access public
   */
  public $amount;

  /**
   * 
   * @var string $amountType
   * @access public
   */
  public $amountType;

  /**
   * 
   * @var string $modifier
   * @access public
   */
  public $modifier;

  /**
   * 
   * @var DataMoney $modifierAmount
   * @access public
   */
  public $modifierAmount;

  /**
   * 
   * @var string $modifierType
   * @access public
   */
  public $modifierType;

  /**
   * 
   * @var DataInt32 $regionID
   * @access public
   */
  public $regionID;

  /**
   * 
   * @var DataInt32 $warehouseID
   * @access public
   */
  public $warehouseID;

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
   * @var DataDecimal $lbound2
   * @access public
   */
  public $lbound2;

  /**
   * 
   * @var DataDecimal $ubound2
   * @access public
   */
  public $ubound2;

  /**
   * 
   * @var string $type2
   * @access public
   */
  public $type2;

  /**
   * 
   * @var DataInt32 $CustomerTypeID
   * @access public
   */
  public $CustomerTypeID;

  /**
   * 
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $shippingRuleID
   * @param DataInt32 $shippingMethodID
   * @param DataDecimal $lbound
   * @param DataDecimal $ubound
   * @param string $type
   * @param DataMoney $amount
   * @param string $amountType
   * @param string $modifier
   * @param DataMoney $modifierAmount
   * @param string $modifierType
   * @param DataInt32 $regionID
   * @param DataInt32 $warehouseID
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @param DataDecimal $lbound2
   * @param DataDecimal $ubound2
   * @param string $type2
   * @param DataInt32 $CustomerTypeID
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $shippingRuleID, $shippingMethodID, $lbound, $ubound, $type, $amount, $amountType, $modifier, $modifierAmount, $modifierType, $regionID, $warehouseID, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp, $lbound2, $ubound2, $type2, $CustomerTypeID)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->shippingRuleID = $shippingRuleID;
    $this->shippingMethodID = $shippingMethodID;
    $this->lbound = $lbound;
    $this->ubound = $ubound;
    $this->type = $type;
    $this->amount = $amount;
    $this->amountType = $amountType;
    $this->modifier = $modifier;
    $this->modifierAmount = $modifierAmount;
    $this->modifierType = $modifierType;
    $this->regionID = $regionID;
    $this->warehouseID = $warehouseID;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
    $this->lbound2 = $lbound2;
    $this->ubound2 = $ubound2;
    $this->type2 = $type2;
    $this->CustomerTypeID = $CustomerTypeID;
  }

}

}
