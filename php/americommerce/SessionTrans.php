<?php

if (!class_exists("SessionTrans", false)) 
{
class SessionTrans
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
   * @var string $UID
   * @access public
   */
  public $UID;

  /**
   * 
   * @var DataInt32 $customerID
   * @access public
   */
  public $customerID;

  /**
   * 
   * @var DataInt32 $userID
   * @access public
   */
  public $userID;

  /**
   * 
   * @var DataDateTime $firstHit
   * @access public
   */
  public $firstHit;

  /**
   * 
   * @var DataDateTime $lastHit
   * @access public
   */
  public $lastHit;

  /**
   * 
   * @var string $ipAddress
   * @access public
   */
  public $ipAddress;

  /**
   * 
   * @var string $hostName
   * @access public
   */
  public $hostName;

  /**
   * 
   * @var DataInt32 $adCodeID
   * @access public
   */
  public $adCodeID;

  /**
   * 
   * @var DataInt32 $numHits
   * @access public
   */
  public $numHits;

  /**
   * 
   * @var DataInt32 $numVisits
   * @access public
   */
  public $numVisits;

  /**
   * 
   * @var string $lastPage
   * @access public
   */
  public $lastPage;

  /**
   * 
   * @var string $referer
   * @access public
   */
  public $referer;

  /**
   * 
   * @var string $adCode
   * @access public
   */
  public $adCode;

  /**
   * 
   * @var DataInt32 $abandoned
   * @access public
   */
  public $abandoned;

  /**
   * 
   * @var string $userAgent
   * @access public
   */
  public $userAgent;

  /**
   * 
   * @var DataInt32 $errorCount
   * @access public
   */
  public $errorCount;

  /**
   * 
   * @var DataInt32 $hasCart
   * @access public
   */
  public $hasCart;

  /**
   * 
   * @var DataInt32 $orderPlaced
   * @access public
   */
  public $orderPlaced;

  /**
   * 
   * @var string $orderID
   * @access public
   */
  public $orderID;

  /**
   * 
   * @var DataInt32 $affiliateID
   * @access public
   */
  public $affiliateID;

  /**
   * 
   * @var DataInt32 $fromAffiliateID
   * @access public
   */
  public $fromAffiliateID;

  /**
   * 
   * @var string $shippingMethod
   * @access public
   */
  public $shippingMethod;

  /**
   * 
   * @var DataInt32 $shippingAddressID
   * @access public
   */
  public $shippingAddressID;

  /**
   * 
   * @var DataInt32 $billingAddressID
   * @access public
   */
  public $billingAddressID;

  /**
   * 
   * @var DataInt32 $paymentMethodID
   * @access public
   */
  public $paymentMethodID;

  /**
   * 
   * @var string $Source
   * @access public
   */
  public $Source;

  /**
   * 
   * @var string $SearchPhrase
   * @access public
   */
  public $SearchPhrase;

  /**
   * 
   * @var boolean $PPC
   * @access public
   */
  public $PPC;

  /**
   * 
   * @var string $PPCKeyword
   * @access public
   */
  public $PPCKeyword;

  /**
   * 
   * @var string $DestUrl
   * @access public
   */
  public $DestUrl;

  /**
   * 
   * @var DataInt32 $ID
   * @access public
   */
  public $ID;

  /**
   * 
   * @var DataInt32 $StoreID
   * @access public
   */
  public $StoreID;

  /**
   * 
   * @var string $referringDomain
   * @access public
   */
  public $referringDomain;

  /**
   * 
   * @var boolean $IsNewCustomer
   * @access public
   */
  public $IsNewCustomer;

  /**
   * 
   * @var boolean $Suspect
   * @access public
   */
  public $Suspect;

  /**
   * 
   * @var string $SuspectReason
   * @access public
   */
  public $SuspectReason;

  /**
   * 
   * @var DataMoney $Goal1
   * @access public
   */
  public $Goal1;

  /**
   * 
   * @var DataMoney $Goal2
   * @access public
   */
  public $Goal2;

  /**
   * 
   * @var DataMoney $Goal3
   * @access public
   */
  public $Goal3;

  /**
   * 
   * @var DataMoney $Goal4
   * @access public
   */
  public $Goal4;

  /**
   * 
   * @var DataMoney $Goal5
   * @access public
   */
  public $Goal5;

  /**
   * 
   * @var string $CustomFormFieldsCollection
   * @access public
   */
  public $CustomFormFieldsCollection;

  /**
   * 
   * @var string $CustomFormsCollection
   * @access public
   */
  public $CustomFormsCollection;

  /**
   * 
   * @var string $CouponCode
   * @access public
   */
  public $CouponCode;

  /**
   * 
   * @var DataInt32 $CustomerTypeID
   * @access public
   */
  public $CustomerTypeID;

  /**
   * 
   * @var DataDateTime $lastHitDate
   * @access public
   */
  public $lastHitDate;

  /**
   * 
   * @var boolean $ProvidedStorePassword
   * @access public
   */
  public $ProvidedStorePassword;

  /**
   * 
   * @var string $GoogleCheckoutAuthCode
   * @access public
   */
  public $GoogleCheckoutAuthCode;

  /**
   * 
   * @var string $SourceGroup
   * @access public
   */
  public $SourceGroup;

  /**
   * 
   * @var string $ExtendedData
   * @access public
   */
  public $ExtendedData;

  /**
   * 
   * @var DataDecimal $AverageRequestTime
   * @access public
   */
  public $AverageRequestTime;

  /**
   * 
   * @var string $Feed
   * @access public
   */
  public $Feed;

  /**
   * 
   * @var DataInt32 $ActiveCartInfoID
   * @access public
   */
  public $ActiveCartInfoID;

  /**
   * 
   * @var DataInt32 $ActiveWishListCartID
   * @access public
   */
  public $ActiveWishListCartID;

  /**
   * 
   * @var string $SecureSessionKey
   * @access public
   */
  public $SecureSessionKey;

  /**
   * 
   * @var string $AffiliateSource
   * @access public
   */
  public $AffiliateSource;

  /**
   * 
   * @var boolean $DoNotProcessPayments
   * @access public
   */
  public $DoNotProcessPayments;

  /**
   * 
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param string $UID
   * @param DataInt32 $customerID
   * @param DataInt32 $userID
   * @param DataDateTime $firstHit
   * @param DataDateTime $lastHit
   * @param string $ipAddress
   * @param string $hostName
   * @param DataInt32 $adCodeID
   * @param DataInt32 $numHits
   * @param DataInt32 $numVisits
   * @param string $lastPage
   * @param string $referer
   * @param string $adCode
   * @param DataInt32 $abandoned
   * @param string $userAgent
   * @param DataInt32 $errorCount
   * @param DataInt32 $hasCart
   * @param DataInt32 $orderPlaced
   * @param string $orderID
   * @param DataInt32 $affiliateID
   * @param DataInt32 $fromAffiliateID
   * @param string $shippingMethod
   * @param DataInt32 $shippingAddressID
   * @param DataInt32 $billingAddressID
   * @param DataInt32 $paymentMethodID
   * @param string $Source
   * @param string $SearchPhrase
   * @param boolean $PPC
   * @param string $PPCKeyword
   * @param string $DestUrl
   * @param DataInt32 $ID
   * @param DataInt32 $StoreID
   * @param string $referringDomain
   * @param boolean $IsNewCustomer
   * @param boolean $Suspect
   * @param string $SuspectReason
   * @param DataMoney $Goal1
   * @param DataMoney $Goal2
   * @param DataMoney $Goal3
   * @param DataMoney $Goal4
   * @param DataMoney $Goal5
   * @param string $CustomFormFieldsCollection
   * @param string $CustomFormsCollection
   * @param string $CouponCode
   * @param DataInt32 $CustomerTypeID
   * @param DataDateTime $lastHitDate
   * @param boolean $ProvidedStorePassword
   * @param string $GoogleCheckoutAuthCode
   * @param string $SourceGroup
   * @param string $ExtendedData
   * @param DataDecimal $AverageRequestTime
   * @param string $Feed
   * @param DataInt32 $ActiveCartInfoID
   * @param DataInt32 $ActiveWishListCartID
   * @param string $SecureSessionKey
   * @param string $AffiliateSource
   * @param boolean $DoNotProcessPayments
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $UID, $customerID, $userID, $firstHit, $lastHit, $ipAddress, $hostName, $adCodeID, $numHits, $numVisits, $lastPage, $referer, $adCode, $abandoned, $userAgent, $errorCount, $hasCart, $orderPlaced, $orderID, $affiliateID, $fromAffiliateID, $shippingMethod, $shippingAddressID, $billingAddressID, $paymentMethodID, $Source, $SearchPhrase, $PPC, $PPCKeyword, $DestUrl, $ID, $StoreID, $referringDomain, $IsNewCustomer, $Suspect, $SuspectReason, $Goal1, $Goal2, $Goal3, $Goal4, $Goal5, $CustomFormFieldsCollection, $CustomFormsCollection, $CouponCode, $CustomerTypeID, $lastHitDate, $ProvidedStorePassword, $GoogleCheckoutAuthCode, $SourceGroup, $ExtendedData, $AverageRequestTime, $Feed, $ActiveCartInfoID, $ActiveWishListCartID, $SecureSessionKey, $AffiliateSource, $DoNotProcessPayments)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->UID = $UID;
    $this->customerID = $customerID;
    $this->userID = $userID;
    $this->firstHit = $firstHit;
    $this->lastHit = $lastHit;
    $this->ipAddress = $ipAddress;
    $this->hostName = $hostName;
    $this->adCodeID = $adCodeID;
    $this->numHits = $numHits;
    $this->numVisits = $numVisits;
    $this->lastPage = $lastPage;
    $this->referer = $referer;
    $this->adCode = $adCode;
    $this->abandoned = $abandoned;
    $this->userAgent = $userAgent;
    $this->errorCount = $errorCount;
    $this->hasCart = $hasCart;
    $this->orderPlaced = $orderPlaced;
    $this->orderID = $orderID;
    $this->affiliateID = $affiliateID;
    $this->fromAffiliateID = $fromAffiliateID;
    $this->shippingMethod = $shippingMethod;
    $this->shippingAddressID = $shippingAddressID;
    $this->billingAddressID = $billingAddressID;
    $this->paymentMethodID = $paymentMethodID;
    $this->Source = $Source;
    $this->SearchPhrase = $SearchPhrase;
    $this->PPC = $PPC;
    $this->PPCKeyword = $PPCKeyword;
    $this->DestUrl = $DestUrl;
    $this->ID = $ID;
    $this->StoreID = $StoreID;
    $this->referringDomain = $referringDomain;
    $this->IsNewCustomer = $IsNewCustomer;
    $this->Suspect = $Suspect;
    $this->SuspectReason = $SuspectReason;
    $this->Goal1 = $Goal1;
    $this->Goal2 = $Goal2;
    $this->Goal3 = $Goal3;
    $this->Goal4 = $Goal4;
    $this->Goal5 = $Goal5;
    $this->CustomFormFieldsCollection = $CustomFormFieldsCollection;
    $this->CustomFormsCollection = $CustomFormsCollection;
    $this->CouponCode = $CouponCode;
    $this->CustomerTypeID = $CustomerTypeID;
    $this->lastHitDate = $lastHitDate;
    $this->ProvidedStorePassword = $ProvidedStorePassword;
    $this->GoogleCheckoutAuthCode = $GoogleCheckoutAuthCode;
    $this->SourceGroup = $SourceGroup;
    $this->ExtendedData = $ExtendedData;
    $this->AverageRequestTime = $AverageRequestTime;
    $this->Feed = $Feed;
    $this->ActiveCartInfoID = $ActiveCartInfoID;
    $this->ActiveWishListCartID = $ActiveWishListCartID;
    $this->SecureSessionKey = $SecureSessionKey;
    $this->AffiliateSource = $AffiliateSource;
    $this->DoNotProcessPayments = $DoNotProcessPayments;
  }

}

}
