<?php

if (!class_exists("AdCodeTrans", false)) 
{
class AdCodeTrans
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
   * @var DataInt32 $adCodeID
   * @access public
   */
  public $adCodeID;

  /**
   * 
   * @var string $adCodeUID
   * @access public
   */
  public $adCodeUID;

  /**
   * 
   * @var string $adCode
   * @access public
   */
  public $adCode;

  /**
   * 
   * @var string $shortDesc
   * @access public
   */
  public $shortDesc;

  /**
   * 
   * @var DataInt32 $visits
   * @access public
   */
  public $visits;

  /**
   * 
   * @var DataInt32 $affiliateID
   * @access public
   */
  public $affiliateID;

  /**
   * 
   * @var string $commission
   * @access public
   */
  public $commission;

  /**
   * 
   * @var string $commissionType
   * @access public
   */
  public $commissionType;

  /**
   * 
   * @var DataMoney $totalSales
   * @access public
   */
  public $totalSales;

  /**
   * 
   * @var DataInt32 $totalOrders
   * @access public
   */
  public $totalOrders;

  /**
   * 
   * @var DataMoney $initialSales
   * @access public
   */
  public $initialSales;

  /**
   * 
   * @var DataMoney $loadSales
   * @access public
   */
  public $loadSales;

  /**
   * 
   * @var DataInt32 $newCustomers
   * @access public
   */
  public $newCustomers;

  /**
   * 
   * @var DataInt32 $loadCustomers
   * @access public
   */
  public $loadCustomers;

  /**
   * 
   * @var DataMoney $totalCommissions
   * @access public
   */
  public $totalCommissions;

  /**
   * 
   * @var DataDecimal $conversionRate
   * @access public
   */
  public $conversionRate;

  /**
   * 
   * @var DataMoney $costPerCustomer
   * @access public
   */
  public $costPerCustomer;

  /**
   * 
   * @var DataMoney $salesPerAdDollar
   * @access public
   */
  public $salesPerAdDollar;

  /**
   * 
   * @var string $repeatCommissionAmount
   * @access public
   */
  public $repeatCommissionAmount;

  /**
   * 
   * @var string $repeatCommissionType
   * @access public
   */
  public $repeatCommissionType;

  /**
   * 
   * @var string $payForRepeatSales
   * @access public
   */
  public $payForRepeatSales;

  /**
   * 
   * @var DataDateTime $creationDate
   * @access public
   */
  public $creationDate;

  /**
   * 
   * @var string $AdCodeURL
   * @access public
   */
  public $AdCodeURL;

  /**
   * 
   * @var boolean $PPC
   * @access public
   */
  public $PPC;

  /**
   * 
   * @var string $Source
   * @access public
   */
  public $Source;

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
   * @var DataDateTime $ExpirationDate
   * @access public
   */
  public $ExpirationDate;

  /**
   * 
   * @var AdCodeCreationType $CreationType
   * @access public
   */
  public $CreationType;

  /**
   * 
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $adCodeID
   * @param string $adCodeUID
   * @param string $adCode
   * @param string $shortDesc
   * @param DataInt32 $visits
   * @param DataInt32 $affiliateID
   * @param string $commission
   * @param string $commissionType
   * @param DataMoney $totalSales
   * @param DataInt32 $totalOrders
   * @param DataMoney $initialSales
   * @param DataMoney $loadSales
   * @param DataInt32 $newCustomers
   * @param DataInt32 $loadCustomers
   * @param DataMoney $totalCommissions
   * @param DataDecimal $conversionRate
   * @param DataMoney $costPerCustomer
   * @param DataMoney $salesPerAdDollar
   * @param string $repeatCommissionAmount
   * @param string $repeatCommissionType
   * @param string $payForRepeatSales
   * @param DataDateTime $creationDate
   * @param string $AdCodeURL
   * @param boolean $PPC
   * @param string $Source
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @param DataDateTime $ExpirationDate
   * @param AdCodeCreationType $CreationType
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $adCodeID, $adCodeUID, $adCode, $shortDesc, $visits, $affiliateID, $commission, $commissionType, $totalSales, $totalOrders, $initialSales, $loadSales, $newCustomers, $loadCustomers, $totalCommissions, $conversionRate, $costPerCustomer, $salesPerAdDollar, $repeatCommissionAmount, $repeatCommissionType, $payForRepeatSales, $creationDate, $AdCodeURL, $PPC, $Source, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp, $ExpirationDate, $CreationType)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->adCodeID = $adCodeID;
    $this->adCodeUID = $adCodeUID;
    $this->adCode = $adCode;
    $this->shortDesc = $shortDesc;
    $this->visits = $visits;
    $this->affiliateID = $affiliateID;
    $this->commission = $commission;
    $this->commissionType = $commissionType;
    $this->totalSales = $totalSales;
    $this->totalOrders = $totalOrders;
    $this->initialSales = $initialSales;
    $this->loadSales = $loadSales;
    $this->newCustomers = $newCustomers;
    $this->loadCustomers = $loadCustomers;
    $this->totalCommissions = $totalCommissions;
    $this->conversionRate = $conversionRate;
    $this->costPerCustomer = $costPerCustomer;
    $this->salesPerAdDollar = $salesPerAdDollar;
    $this->repeatCommissionAmount = $repeatCommissionAmount;
    $this->repeatCommissionType = $repeatCommissionType;
    $this->payForRepeatSales = $payForRepeatSales;
    $this->creationDate = $creationDate;
    $this->AdCodeURL = $AdCodeURL;
    $this->PPC = $PPC;
    $this->Source = $Source;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
    $this->ExpirationDate = $ExpirationDate;
    $this->CreationType = $CreationType;
  }

}

}
