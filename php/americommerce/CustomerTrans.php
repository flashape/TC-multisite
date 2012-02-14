<?php

if (!class_exists("CustomerTrans", false)) 
{
class CustomerTrans
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
   * @var DataInt32 $customerID
   * @access public
   */
  public $customerID;

  /**
   * 
   * @var string $customerNumber
   * @access public
   */
  public $customerNumber;

  /**
   * 
   * @var string $lastName
   * @access public
   */
  public $lastName;

  /**
   * 
   * @var string $firstName
   * @access public
   */
  public $firstName;

  /**
   * 
   * @var string $email
   * @access public
   */
  public $email;

  /**
   * 
   * @var boolean $emailList
   * @access public
   */
  public $emailList;

  /**
   * 
   * @var string $password
   * @access public
   */
  public $password;

  /**
   * 
   * @var string $phoneNumber
   * @access public
   */
  public $phoneNumber;

  /**
   * 
   * @var DataDateTime $registeredDate
   * @access public
   */
  public $registeredDate;

  /**
   * 
   * @var DataDateTime $lastVisitDate
   * @access public
   */
  public $lastVisitDate;

  /**
   * 
   * @var string $fromURL
   * @access public
   */
  public $fromURL;

  /**
   * 
   * @var string $adCode
   * @access public
   */
  public $adCode;

  /**
   * 
   * @var DataInt32 $adCodeID
   * @access public
   */
  public $adCodeID;

  /**
   * 
   * @var DataInt32 $affiliateID
   * @access public
   */
  public $affiliateID;

  /**
   * 
   * @var DataDateTime $lostDate
   * @access public
   */
  public $lostDate;

  /**
   * 
   * @var string $lostTmp
   * @access public
   */
  public $lostTmp;

  /**
   * 
   * @var boolean $QBExport
   * @access public
   */
  public $QBExport;

  /**
   * 
   * @var boolean $QBUpdate
   * @access public
   */
  public $QBUpdate;

  /**
   * 
   * @var base64Binary $binarypassword
   * @access public
   */
  public $binarypassword;

  /**
   * 
   * @var string $QBListID
   * @access public
   */
  public $QBListID;

  /**
   * 
   * @var DataInt32 $customerTypeID
   * @access public
   */
  public $customerTypeID;

  /**
   * 
   * @var boolean $noTaxFlag
   * @access public
   */
  public $noTaxFlag;

  /**
   * 
   * @var string $comments
   * @access public
   */
  public $comments;

  /**
   * 
   * @var DataInt32 $storeID
   * @access public
   */
  public $storeID;

  /**
   * 
   * @var string $Source
   * @access public
   */
  public $Source;

  /**
   * 
   * @var DataInt32 $PPC
   * @access public
   */
  public $PPC;

  /**
   * 
   * @var base64Binary $PPCKeyword
   * @access public
   */
  public $PPCKeyword;

  /**
   * 
   * @var string $SearchString
   * @access public
   */
  public $SearchString;

  /**
   * 
   * @var string $DestUrl
   * @access public
   */
  public $DestUrl;

  /**
   * 
   * @var boolean $NoAccount
   * @access public
   */
  public $NoAccount;

  /**
   * 
   * @var string $SalesPerson
   * @access public
   */
  public $SalesPerson;

  /**
   * 
   * @var string $AlternatePhoneNumber
   * @access public
   */
  public $AlternatePhoneNumber;

  /**
   * 
   * @var boolean $IsAffiliateCustomer
   * @access public
   */
  public $IsAffiliateCustomer;

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
   * @var string $Username
   * @access public
   */
  public $Username;

  /**
   * 
   * @var boolean $ContactInformationOnlyAccount
   * @access public
   */
  public $ContactInformationOnlyAccount;

  /**
   * 
   * @var string $TaxExemptionNr
   * @access public
   */
  public $TaxExemptionNr;

  /**
   * 
   * @var string $Company
   * @access public
   */
  public $Company;

  /**
   * 
   * @var string $DefaultPaymentType
   * @access public
   */
  public $DefaultPaymentType;

  /**
   * 
   * @var string $DefaultPaymentTypeName
   * @access public
   */
  public $DefaultPaymentTypeName;

  /**
   * 
   * @var string $DisplayName
   * @access public
   */
  public $DisplayName;

  /**
   * 
   * @var string $DisplayWebsite
   * @access public
   */
  public $DisplayWebsite;

  /**
   * 
   * @var string $DisplayLocation
   * @access public
   */
  public $DisplayLocation;

  /**
   * 
   * @var string $SourceGroup
   * @access public
   */
  public $SourceGroup;

  /**
   * 
   * @var DataDateTime $CustomerTimedFollowupLastRun
   * @access public
   */
  public $CustomerTimedFollowupLastRun;

  /**
   * 
   * @var DataInt32 $SalesPersonUserID
   * @access public
   */
  public $SalesPersonUserID;

  /**
   * 
   * @var string $SingleSignonKey
   * @access public
   */
  public $SingleSignonKey;

  /**
   * 
   * @var DataDateTime $SingleSignonExp
   * @access public
   */
  public $SingleSignonExp;

  /**
   * 
   * @var string $Title
   * @access public
   */
  public $Title;

  /**
   * 
   * @var array $CustomerPaymentMethodColTrans
   * @access public
   */
  public $CustomerPaymentMethodColTrans;

  /**
   * 
   * @var array $AddressColTrans
   * @access public
   */
  public $AddressColTrans;

  /**
   * 
   * @var array $EmailLogColTrans
   * @access public
   */
  public $EmailLogColTrans;

  /**
   * 
   * @var array $DripSeriesWhoToContactColTrans
   * @access public
   */
  public $DripSeriesWhoToContactColTrans;

  /**
   * 
   * @var array $GiftCertificateColTrans
   * @access public
   */
  public $GiftCertificateColTrans;

  /**
   * 
   * @var array $CustomerChildColTrans
   * @access public
   */
  public $CustomerChildColTrans;

  /**
   * 
   * @var array $CustomerParentColTrans
   * @access public
   */
  public $CustomerParentColTrans;

  /**
   * 
   * @var CustomerAssociationTrans $CustomerAssociationTrans
   * @access public
   */
  public $CustomerAssociationTrans;

  /**
   * 
   * @var boolean $ValidateCustomFields
   * @access public
   */
  public $ValidateCustomFields;

  /**
   * 
   * @var Dictionary $CustomFields
   * @access public
   */
  public $CustomFields;

  /**
   * 
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $customerID
   * @param string $customerNumber
   * @param string $lastName
   * @param string $firstName
   * @param string $email
   * @param boolean $emailList
   * @param string $password
   * @param string $phoneNumber
   * @param DataDateTime $registeredDate
   * @param DataDateTime $lastVisitDate
   * @param string $fromURL
   * @param string $adCode
   * @param DataInt32 $adCodeID
   * @param DataInt32 $affiliateID
   * @param DataDateTime $lostDate
   * @param string $lostTmp
   * @param boolean $QBExport
   * @param boolean $QBUpdate
   * @param base64Binary $binarypassword
   * @param string $QBListID
   * @param DataInt32 $customerTypeID
   * @param boolean $noTaxFlag
   * @param string $comments
   * @param DataInt32 $storeID
   * @param string $Source
   * @param DataInt32 $PPC
   * @param base64Binary $PPCKeyword
   * @param string $SearchString
   * @param string $DestUrl
   * @param boolean $NoAccount
   * @param string $SalesPerson
   * @param string $AlternatePhoneNumber
   * @param boolean $IsAffiliateCustomer
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @param string $Username
   * @param boolean $ContactInformationOnlyAccount
   * @param string $TaxExemptionNr
   * @param string $Company
   * @param string $DefaultPaymentType
   * @param string $DefaultPaymentTypeName
   * @param string $DisplayName
   * @param string $DisplayWebsite
   * @param string $DisplayLocation
   * @param string $SourceGroup
   * @param DataDateTime $CustomerTimedFollowupLastRun
   * @param DataInt32 $SalesPersonUserID
   * @param string $SingleSignonKey
   * @param DataDateTime $SingleSignonExp
   * @param string $Title
   * @param array $CustomerPaymentMethodColTrans
   * @param array $AddressColTrans
   * @param array $EmailLogColTrans
   * @param array $DripSeriesWhoToContactColTrans
   * @param array $GiftCertificateColTrans
   * @param array $CustomerChildColTrans
   * @param array $CustomerParentColTrans
   * @param CustomerAssociationTrans $CustomerAssociationTrans
   * @param boolean $ValidateCustomFields
   * @param Dictionary $CustomFields
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $customerID, $customerNumber, $lastName, $firstName, $email, $emailList, $password, $phoneNumber, $registeredDate, $lastVisitDate, $fromURL, $adCode, $adCodeID, $affiliateID, $lostDate, $lostTmp, $QBExport, $QBUpdate, $binarypassword, $QBListID, $customerTypeID, $noTaxFlag, $comments, $storeID, $Source, $PPC, $PPCKeyword, $SearchString, $DestUrl, $NoAccount, $SalesPerson, $AlternatePhoneNumber, $IsAffiliateCustomer, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp, $Username, $ContactInformationOnlyAccount, $TaxExemptionNr, $Company, $DefaultPaymentType, $DefaultPaymentTypeName, $DisplayName, $DisplayWebsite, $DisplayLocation, $SourceGroup, $CustomerTimedFollowupLastRun, $SalesPersonUserID, $SingleSignonKey, $SingleSignonExp, $Title, $CustomerPaymentMethodColTrans, $AddressColTrans, $EmailLogColTrans, $DripSeriesWhoToContactColTrans, $GiftCertificateColTrans, $CustomerChildColTrans, $CustomerParentColTrans, $CustomerAssociationTrans, $ValidateCustomFields, $CustomFields)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->customerID = $customerID;
    $this->customerNumber = $customerNumber;
    $this->lastName = $lastName;
    $this->firstName = $firstName;
    $this->email = $email;
    $this->emailList = $emailList;
    $this->password = $password;
    $this->phoneNumber = $phoneNumber;
    $this->registeredDate = $registeredDate;
    $this->lastVisitDate = $lastVisitDate;
    $this->fromURL = $fromURL;
    $this->adCode = $adCode;
    $this->adCodeID = $adCodeID;
    $this->affiliateID = $affiliateID;
    $this->lostDate = $lostDate;
    $this->lostTmp = $lostTmp;
    $this->QBExport = $QBExport;
    $this->QBUpdate = $QBUpdate;
    $this->binarypassword = $binarypassword;
    $this->QBListID = $QBListID;
    $this->customerTypeID = $customerTypeID;
    $this->noTaxFlag = $noTaxFlag;
    $this->comments = $comments;
    $this->storeID = $storeID;
    $this->Source = $Source;
    $this->PPC = $PPC;
    $this->PPCKeyword = $PPCKeyword;
    $this->SearchString = $SearchString;
    $this->DestUrl = $DestUrl;
    $this->NoAccount = $NoAccount;
    $this->SalesPerson = $SalesPerson;
    $this->AlternatePhoneNumber = $AlternatePhoneNumber;
    $this->IsAffiliateCustomer = $IsAffiliateCustomer;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
    $this->Username = $Username;
    $this->ContactInformationOnlyAccount = $ContactInformationOnlyAccount;
    $this->TaxExemptionNr = $TaxExemptionNr;
    $this->Company = $Company;
    $this->DefaultPaymentType = $DefaultPaymentType;
    $this->DefaultPaymentTypeName = $DefaultPaymentTypeName;
    $this->DisplayName = $DisplayName;
    $this->DisplayWebsite = $DisplayWebsite;
    $this->DisplayLocation = $DisplayLocation;
    $this->SourceGroup = $SourceGroup;
    $this->CustomerTimedFollowupLastRun = $CustomerTimedFollowupLastRun;
    $this->SalesPersonUserID = $SalesPersonUserID;
    $this->SingleSignonKey = $SingleSignonKey;
    $this->SingleSignonExp = $SingleSignonExp;
    $this->Title = $Title;
    $this->CustomerPaymentMethodColTrans = $CustomerPaymentMethodColTrans;
    $this->AddressColTrans = $AddressColTrans;
    $this->EmailLogColTrans = $EmailLogColTrans;
    $this->DripSeriesWhoToContactColTrans = $DripSeriesWhoToContactColTrans;
    $this->GiftCertificateColTrans = $GiftCertificateColTrans;
    $this->CustomerChildColTrans = $CustomerChildColTrans;
    $this->CustomerParentColTrans = $CustomerParentColTrans;
    $this->CustomerAssociationTrans = $CustomerAssociationTrans;
    $this->ValidateCustomFields = $ValidateCustomFields;
    $this->CustomFields = $CustomFields;
  }

}

}
