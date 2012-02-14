<?php

if (!class_exists("ShippingRateAdjustmentsTrans", false)) 
{
class ShippingRateAdjustmentsTrans
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
   * @var DataInt32 $shippingRateAdjustmentTypeID
   * @access public
   */
  public $shippingRateAdjustmentTypeID;

  /**
   * 
   * @var DataDecimal $amount
   * @access public
   */
  public $amount;

  /**
   * 
   * @var string $rate
   * @access public
   */
  public $rate;

  /**
   * 
   * @var string $provider
   * @access public
   */
  public $provider;

  /**
   * 
   * @var boolean $notAvailable
   * @access public
   */
  public $notAvailable;

  /**
   * 
   * @var DataInt32 $itemID
   * @access public
   */
  public $itemID;

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
   * @param DataInt32 $shippingRateAdjustmentTypeID
   * @param DataDecimal $amount
   * @param string $rate
   * @param string $provider
   * @param boolean $notAvailable
   * @param DataInt32 $itemID
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $ID, $shippingRateAdjustmentTypeID, $amount, $rate, $provider, $notAvailable, $itemID, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->ID = $ID;
    $this->shippingRateAdjustmentTypeID = $shippingRateAdjustmentTypeID;
    $this->amount = $amount;
    $this->rate = $rate;
    $this->provider = $provider;
    $this->notAvailable = $notAvailable;
    $this->itemID = $itemID;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
  }

}

}
