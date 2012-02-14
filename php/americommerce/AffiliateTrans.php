<?php

if (!class_exists("AffiliateTrans", false)) 
{
class AffiliateTrans
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
   * @var DataInt32 $affiliateID
   * @access public
   */
  public $affiliateID;

  /**
   * 
   * @var DataInt32 $affiliateStatusID
   * @access public
   */
  public $affiliateStatusID;

  /**
   * 
   * @var string $email
   * @access public
   */
  public $email;

  /**
   * 
   * @var string $password
   * @access public
   */
  public $password;

  /**
   * 
   * @var string $affiliateCode
   * @access public
   */
  public $affiliateCode;

  /**
   * 
   * @var string $affiliateName
   * @access public
   */
  public $affiliateName;

  /**
   * 
   * @var string $webSiteURLs
   * @access public
   */
  public $webSiteURLs;

  /**
   * 
   * @var string $whereFrom
   * @access public
   */
  public $whereFrom;

  /**
   * 
   * @var string $description
   * @access public
   */
  public $description;

  /**
   * 
   * @var DataMoney $commissionAmount
   * @access public
   */
  public $commissionAmount;

  /**
   * 
   * @var string $commissionType
   * @access public
   */
  public $commissionType;

  /**
   * 
   * @var string $cookieExpiration
   * @access public
   */
  public $cookieExpiration;

  /**
   * 
   * @var string $cookieExpirationType
   * @access public
   */
  public $cookieExpirationType;

  /**
   * 
   * @var string $payForRepeatSales
   * @access public
   */
  public $payForRepeatSales;

  /**
   * 
   * @var DataMoney $repeatCommissionAmount
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
   * @var DataDateTime $lastStatementDate
   * @access public
   */
  public $lastStatementDate;

  /**
   * 
   * @var string $payeeName
   * @access public
   */
  public $payeeName;

  /**
   * 
   * @var string $payeeAddress1
   * @access public
   */
  public $payeeAddress1;

  /**
   * 
   * @var string $payeeAddress2
   * @access public
   */
  public $payeeAddress2;

  /**
   * 
   * @var string $payeeAddress3
   * @access public
   */
  public $payeeAddress3;

  /**
   * 
   * @var string $payeeCity
   * @access public
   */
  public $payeeCity;

  /**
   * 
   * @var string $payeeState
   * @access public
   */
  public $payeeState;

  /**
   * 
   * @var string $payeeZipcode
   * @access public
   */
  public $payeeZipcode;

  /**
   * 
   * @var DataInt32 $payeeCountryID
   * @access public
   */
  public $payeeCountryID;

  /**
   * 
   * @var string $payeePhoneNumber
   * @access public
   */
  public $payeePhoneNumber;

  /**
   * 
   * @var string $payeeTaxID
   * @access public
   */
  public $payeeTaxID;

  /**
   * 
   * @var string $payeeTaxRegistrationName
   * @access public
   */
  public $payeeTaxRegistrationName;

  /**
   * 
   * @var string $payeeTaxClassification
   * @access public
   */
  public $payeeTaxClassification;

  /**
   * 
   * @var string $contactName
   * @access public
   */
  public $contactName;

  /**
   * 
   * @var string $contactAddress1
   * @access public
   */
  public $contactAddress1;

  /**
   * 
   * @var string $contactAddress2
   * @access public
   */
  public $contactAddress2;

  /**
   * 
   * @var string $contactAddress3
   * @access public
   */
  public $contactAddress3;

  /**
   * 
   * @var string $contactCity
   * @access public
   */
  public $contactCity;

  /**
   * 
   * @var string $contactState
   * @access public
   */
  public $contactState;

  /**
   * 
   * @var string $contactZipcode
   * @access public
   */
  public $contactZipcode;

  /**
   * 
   * @var DataInt32 $contactCountryID
   * @access public
   */
  public $contactCountryID;

  /**
   * 
   * @var string $contactPhoneNumber
   * @access public
   */
  public $contactPhoneNumber;

  /**
   * 
   * @var DataInt32 $totalVisitors
   * @access public
   */
  public $totalVisitors;

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
   * @var DataInt32 $newCustomers
   * @access public
   */
  public $newCustomers;

  /**
   * 
   * @var DataMoney $totalCommissions
   * @access public
   */
  public $totalCommissions;

  /**
   * 
   * @var DataDecimal $convRate
   * @access public
   */
  public $convRate;

  /**
   * 
   * @var DataInt32 $StoreID
   * @access public
   */
  public $StoreID;

  /**
   * 
   * @var string $CustomFormInformation
   * @access public
   */
  public $CustomFormInformation;

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
   * @var DataInt32 $DEKID
   * @access public
   */
  public $DEKID;

  /**
   * 
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $affiliateID
   * @param DataInt32 $affiliateStatusID
   * @param string $email
   * @param string $password
   * @param string $affiliateCode
   * @param string $affiliateName
   * @param string $webSiteURLs
   * @param string $whereFrom
   * @param string $description
   * @param DataMoney $commissionAmount
   * @param string $commissionType
   * @param string $cookieExpiration
   * @param string $cookieExpirationType
   * @param string $payForRepeatSales
   * @param DataMoney $repeatCommissionAmount
   * @param string $repeatCommissionType
   * @param DataDateTime $lastStatementDate
   * @param string $payeeName
   * @param string $payeeAddress1
   * @param string $payeeAddress2
   * @param string $payeeAddress3
   * @param string $payeeCity
   * @param string $payeeState
   * @param string $payeeZipcode
   * @param DataInt32 $payeeCountryID
   * @param string $payeePhoneNumber
   * @param string $payeeTaxID
   * @param string $payeeTaxRegistrationName
   * @param string $payeeTaxClassification
   * @param string $contactName
   * @param string $contactAddress1
   * @param string $contactAddress2
   * @param string $contactAddress3
   * @param string $contactCity
   * @param string $contactState
   * @param string $contactZipcode
   * @param DataInt32 $contactCountryID
   * @param string $contactPhoneNumber
   * @param DataInt32 $totalVisitors
   * @param DataMoney $totalSales
   * @param DataInt32 $totalOrders
   * @param DataInt32 $newCustomers
   * @param DataMoney $totalCommissions
   * @param DataDecimal $convRate
   * @param DataInt32 $StoreID
   * @param string $CustomFormInformation
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @param DataInt32 $DEKID
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $affiliateID, $affiliateStatusID, $email, $password, $affiliateCode, $affiliateName, $webSiteURLs, $whereFrom, $description, $commissionAmount, $commissionType, $cookieExpiration, $cookieExpirationType, $payForRepeatSales, $repeatCommissionAmount, $repeatCommissionType, $lastStatementDate, $payeeName, $payeeAddress1, $payeeAddress2, $payeeAddress3, $payeeCity, $payeeState, $payeeZipcode, $payeeCountryID, $payeePhoneNumber, $payeeTaxID, $payeeTaxRegistrationName, $payeeTaxClassification, $contactName, $contactAddress1, $contactAddress2, $contactAddress3, $contactCity, $contactState, $contactZipcode, $contactCountryID, $contactPhoneNumber, $totalVisitors, $totalSales, $totalOrders, $newCustomers, $totalCommissions, $convRate, $StoreID, $CustomFormInformation, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp, $DEKID)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->affiliateID = $affiliateID;
    $this->affiliateStatusID = $affiliateStatusID;
    $this->email = $email;
    $this->password = $password;
    $this->affiliateCode = $affiliateCode;
    $this->affiliateName = $affiliateName;
    $this->webSiteURLs = $webSiteURLs;
    $this->whereFrom = $whereFrom;
    $this->description = $description;
    $this->commissionAmount = $commissionAmount;
    $this->commissionType = $commissionType;
    $this->cookieExpiration = $cookieExpiration;
    $this->cookieExpirationType = $cookieExpirationType;
    $this->payForRepeatSales = $payForRepeatSales;
    $this->repeatCommissionAmount = $repeatCommissionAmount;
    $this->repeatCommissionType = $repeatCommissionType;
    $this->lastStatementDate = $lastStatementDate;
    $this->payeeName = $payeeName;
    $this->payeeAddress1 = $payeeAddress1;
    $this->payeeAddress2 = $payeeAddress2;
    $this->payeeAddress3 = $payeeAddress3;
    $this->payeeCity = $payeeCity;
    $this->payeeState = $payeeState;
    $this->payeeZipcode = $payeeZipcode;
    $this->payeeCountryID = $payeeCountryID;
    $this->payeePhoneNumber = $payeePhoneNumber;
    $this->payeeTaxID = $payeeTaxID;
    $this->payeeTaxRegistrationName = $payeeTaxRegistrationName;
    $this->payeeTaxClassification = $payeeTaxClassification;
    $this->contactName = $contactName;
    $this->contactAddress1 = $contactAddress1;
    $this->contactAddress2 = $contactAddress2;
    $this->contactAddress3 = $contactAddress3;
    $this->contactCity = $contactCity;
    $this->contactState = $contactState;
    $this->contactZipcode = $contactZipcode;
    $this->contactCountryID = $contactCountryID;
    $this->contactPhoneNumber = $contactPhoneNumber;
    $this->totalVisitors = $totalVisitors;
    $this->totalSales = $totalSales;
    $this->totalOrders = $totalOrders;
    $this->newCustomers = $newCustomers;
    $this->totalCommissions = $totalCommissions;
    $this->convRate = $convRate;
    $this->StoreID = $StoreID;
    $this->CustomFormInformation = $CustomFormInformation;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
    $this->DEKID = $DEKID;
  }

}

}
