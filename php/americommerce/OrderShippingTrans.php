<?php

if (!class_exists("OrderShippingTrans", false)) 
{
class OrderShippingTrans
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
   * @var DataInt32 $OrderShippingID
   * @access public
   */
  public $OrderShippingID;

  /**
   * 
   * @var DataInt32 $OrderID
   * @access public
   */
  public $OrderID;

  /**
   * 
   * @var DataDateTime $ShippingDate
   * @access public
   */
  public $ShippingDate;

  /**
   * 
   * @var string $TrackingNumbers
   * @access public
   */
  public $TrackingNumbers;

  /**
   * 
   * @var string $TrackingUrl
   * @access public
   */
  public $TrackingUrl;

  /**
   * 
   * @var string $ShippingMethod
   * @access public
   */
  public $ShippingMethod;

  /**
   * 
   * @var DataInt32 $ShippingMethodID
   * @access public
   */
  public $ShippingMethodID;

  /**
   * 
   * @var DataInt32 $NumberOfPackages
   * @access public
   */
  public $NumberOfPackages;

  /**
   * 
   * @var DataMoney $TotalWeight
   * @access public
   */
  public $TotalWeight;

  /**
   * 
   * @var string $ProviderBaseShippingCost
   * @access public
   */
  public $ProviderBaseShippingCost;

  /**
   * 
   * @var DataMoney $ProviderInsuranceCost
   * @access public
   */
  public $ProviderInsuranceCost;

  /**
   * 
   * @var DataMoney $ProviderHandlingCost
   * @access public
   */
  public $ProviderHandlingCost;

  /**
   * 
   * @var DataMoney $ProviderOtherCharges
   * @access public
   */
  public $ProviderOtherCharges;

  /**
   * 
   * @var DataMoney $ProviderTotalShippingCost
   * @access public
   */
  public $ProviderTotalShippingCost;

  /**
   * 
   * @var boolean $EmailSent
   * @access public
   */
  public $EmailSent;

  /**
   * 
   * @var string $PrivateComment
   * @access public
   */
  public $PrivateComment;

  /**
   * 
   * @var string $ShippingComment
   * @access public
   */
  public $ShippingComment;

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
   * @var base64Binary $DateTimeStamp
   * @access public
   */
  public $DateTimeStamp;

  /**
   * 
   * @var string $ShippingMethodType
   * @access public
   */
  public $ShippingMethodType;

  /**
   * 
   * @var string $ShipmentName
   * @access public
   */
  public $ShipmentName;

  /**
   * 
   * @var array $OrderItemColTrans
   * @access public
   */
  public $OrderItemColTrans;

  /**
   * 
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $OrderShippingID
   * @param DataInt32 $OrderID
   * @param DataDateTime $ShippingDate
   * @param string $TrackingNumbers
   * @param string $TrackingUrl
   * @param string $ShippingMethod
   * @param DataInt32 $ShippingMethodID
   * @param DataInt32 $NumberOfPackages
   * @param DataMoney $TotalWeight
   * @param string $ProviderBaseShippingCost
   * @param DataMoney $ProviderInsuranceCost
   * @param DataMoney $ProviderHandlingCost
   * @param DataMoney $ProviderOtherCharges
   * @param DataMoney $ProviderTotalShippingCost
   * @param boolean $EmailSent
   * @param string $PrivateComment
   * @param string $ShippingComment
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param base64Binary $DateTimeStamp
   * @param string $ShippingMethodType
   * @param string $ShipmentName
   * @param array $OrderItemColTrans
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $OrderShippingID, $OrderID, $ShippingDate, $TrackingNumbers, $TrackingUrl, $ShippingMethod, $ShippingMethodID, $NumberOfPackages, $TotalWeight, $ProviderBaseShippingCost, $ProviderInsuranceCost, $ProviderHandlingCost, $ProviderOtherCharges, $ProviderTotalShippingCost, $EmailSent, $PrivateComment, $ShippingComment, $EnterDate, $EnteredBy, $EditDate, $EditedBy, $DateTimeStamp, $ShippingMethodType, $ShipmentName, $OrderItemColTrans)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->OrderShippingID = $OrderShippingID;
    $this->OrderID = $OrderID;
    $this->ShippingDate = $ShippingDate;
    $this->TrackingNumbers = $TrackingNumbers;
    $this->TrackingUrl = $TrackingUrl;
    $this->ShippingMethod = $ShippingMethod;
    $this->ShippingMethodID = $ShippingMethodID;
    $this->NumberOfPackages = $NumberOfPackages;
    $this->TotalWeight = $TotalWeight;
    $this->ProviderBaseShippingCost = $ProviderBaseShippingCost;
    $this->ProviderInsuranceCost = $ProviderInsuranceCost;
    $this->ProviderHandlingCost = $ProviderHandlingCost;
    $this->ProviderOtherCharges = $ProviderOtherCharges;
    $this->ProviderTotalShippingCost = $ProviderTotalShippingCost;
    $this->EmailSent = $EmailSent;
    $this->PrivateComment = $PrivateComment;
    $this->ShippingComment = $ShippingComment;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->DateTimeStamp = $DateTimeStamp;
    $this->ShippingMethodType = $ShippingMethodType;
    $this->ShipmentName = $ShipmentName;
    $this->OrderItemColTrans = $OrderItemColTrans;
  }

}

}
