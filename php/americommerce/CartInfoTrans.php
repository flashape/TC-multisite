<?php

if (!class_exists("CartInfoTrans", false)) 
{
class CartInfoTrans
{

  /**
   * 
   * @var boolean $IsEditMode
   * @access public
   */
  public $IsEditMode;

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
   * @var DataInt32 $CartInfoID
   * @access public
   */
  public $CartInfoID;

  /**
   * 
   * @var string $CartName
   * @access public
   */
  public $CartName;

  /**
   * 
   * @var CartType $CartType
   * @access public
   */
  public $CartType;

  /**
   * 
   * @var DataInt32 $CustomerID
   * @access public
   */
  public $CustomerID;

  /**
   * 
   * @var boolean $PubliclyViewable
   * @access public
   */
  public $PubliclyViewable;

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
   * @var DataInt32 $StoreID
   * @access public
   */
  public $StoreID;

  /**
   * 
   * @var DataInt32 $SessionID
   * @access public
   */
  public $SessionID;

  /**
   * 
   * @var DataMoney $DiscountTotal
   * @access public
   */
  public $DiscountTotal;

  /**
   * 
   * @var DataMoney $SubTotal
   * @access public
   */
  public $SubTotal;

  /**
   * 
   * @var DataMoney $ShippingTotal
   * @access public
   */
  public $ShippingTotal;

  /**
   * 
   * @var DataMoney $HandlingTotal
   * @access public
   */
  public $HandlingTotal;

  /**
   * 
   * @var DataMoney $TaxTotal
   * @access public
   */
  public $TaxTotal;

  /**
   * 
   * @var DataMoney $GrandTotal
   * @access public
   */
  public $GrandTotal;

  /**
   * 
   * @var DataMoney $TaxRate
   * @access public
   */
  public $TaxRate;

  /**
   * 
   * @var DataMoney $AdditionalFeesTotal
   * @access public
   */
  public $AdditionalFeesTotal;

  /**
   * 
   * @var DataMoney $ShippingTotalAfterDiscount
   * @access public
   */
  public $ShippingTotalAfterDiscount;

  /**
   * 
   * @var DataMoney $RegionMarkupAmount
   * @access public
   */
  public $RegionMarkupAmount;

  /**
   * 
   * @var DataMoney $NonShippingDiscount
   * @access public
   */
  public $NonShippingDiscount;

  /**
   * 
   * @var DataMoney $GiftCertificateDiscount
   * @access public
   */
  public $GiftCertificateDiscount;

  /**
   * 
   * @var DataInt32 $DiscountMethodID
   * @access public
   */
  public $DiscountMethodID;

  /**
   * 
   * @var string $DiscountString
   * @access public
   */
  public $DiscountString;

  /**
   * 
   * @var string $CouponCode
   * @access public
   */
  public $CouponCode;

  /**
   * 
   * @var DataInt32 $BelongsToOrderID
   * @access public
   */
  public $BelongsToOrderID;

  /**
   * 
   * @var string $ShippingEstimateCity
   * @access public
   */
  public $ShippingEstimateCity;

  /**
   * 
   * @var string $ShippingEstimateStateCode
   * @access public
   */
  public $ShippingEstimateStateCode;

  /**
   * 
   * @var string $ShippingEstimatePostalCode
   * @access public
   */
  public $ShippingEstimatePostalCode;

  /**
   * 
   * @var string $ShippingEstimateCountryCode
   * @access public
   */
  public $ShippingEstimateCountryCode;

  /**
   * 
   * @var boolean $ShippingBilledToAccount
   * @access public
   */
  public $ShippingBilledToAccount;

  /**
   * 
   * @var string $AdditionalFeesString
   * @access public
   */
  public $AdditionalFeesString;

  /**
   * 
   * @var DataInt32 $CustomerPaymentMethodID
   * @access public
   */
  public $CustomerPaymentMethodID;

  /**
   * 
   * @var DataInt32 $PaymentMethodID
   * @access public
   */
  public $PaymentMethodID;

  /**
   * 
   * @var boolean $PaymentCartOnly
   * @access public
   */
  public $PaymentCartOnly;

  /**
   * 
   * @var string $ErrorText
   * @access public
   */
  public $ErrorText;

  /**
   * 
   * @var string $ShippingErrorText
   * @access public
   */
  public $ShippingErrorText;

  /**
   * 
   * @var string $ShippingNotice
   * @access public
   */
  public $ShippingNotice;

  /**
   * 
   * @var string $Message
   * @access public
   */
  public $Message;

  /**
   * 
   * @var string $ShippingClassificationListString
   * @access public
   */
  public $ShippingClassificationListString;

  /**
   * 
   * @var string $ShippingMethodListString
   * @access public
   */
  public $ShippingMethodListString;

  /**
   * 
   * @var boolean $MustCallForShipping
   * @access public
   */
  public $MustCallForShipping;

  /**
   * 
   * @var boolean $ShippingNotAvailableToArea
   * @access public
   */
  public $ShippingNotAvailableToArea;

  /**
   * 
   * @var boolean $CanOverrideShippableRegions
   * @access public
   */
  public $CanOverrideShippableRegions;

  /**
   * 
   * @var DataInt32 $StoreCardTypeID
   * @access public
   */
  public $StoreCardTypeID;

  /**
   * 
   * @var string $ShippingMethodChosen
   * @access public
   */
  public $ShippingMethodChosen;

  /**
   * 
   * @var array $CartColTrans
   * @access public
   */
  public $CartColTrans;

  /**
   * 
   * @param boolean $IsEditMode
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $CartInfoID
   * @param string $CartName
   * @param CartType $CartType
   * @param DataInt32 $CustomerID
   * @param boolean $PubliclyViewable
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @param DataInt32 $StoreID
   * @param DataInt32 $SessionID
   * @param DataMoney $DiscountTotal
   * @param DataMoney $SubTotal
   * @param DataMoney $ShippingTotal
   * @param DataMoney $HandlingTotal
   * @param DataMoney $TaxTotal
   * @param DataMoney $GrandTotal
   * @param DataMoney $TaxRate
   * @param DataMoney $AdditionalFeesTotal
   * @param DataMoney $ShippingTotalAfterDiscount
   * @param DataMoney $RegionMarkupAmount
   * @param DataMoney $NonShippingDiscount
   * @param DataMoney $GiftCertificateDiscount
   * @param DataInt32 $DiscountMethodID
   * @param string $DiscountString
   * @param string $CouponCode
   * @param DataInt32 $BelongsToOrderID
   * @param string $ShippingEstimateCity
   * @param string $ShippingEstimateStateCode
   * @param string $ShippingEstimatePostalCode
   * @param string $ShippingEstimateCountryCode
   * @param boolean $ShippingBilledToAccount
   * @param string $AdditionalFeesString
   * @param DataInt32 $CustomerPaymentMethodID
   * @param DataInt32 $PaymentMethodID
   * @param boolean $PaymentCartOnly
   * @param string $ErrorText
   * @param string $ShippingErrorText
   * @param string $ShippingNotice
   * @param string $Message
   * @param string $ShippingClassificationListString
   * @param string $ShippingMethodListString
   * @param boolean $MustCallForShipping
   * @param boolean $ShippingNotAvailableToArea
   * @param boolean $CanOverrideShippableRegions
   * @param DataInt32 $StoreCardTypeID
   * @param string $ShippingMethodChosen
   * @param array $CartColTrans
   * @access public
   */
  public function __construct($IsEditMode, $IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $CartInfoID, $CartName, $CartType, $CustomerID, $PubliclyViewable, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp, $StoreID, $SessionID, $DiscountTotal, $SubTotal, $ShippingTotal, $HandlingTotal, $TaxTotal, $GrandTotal, $TaxRate, $AdditionalFeesTotal, $ShippingTotalAfterDiscount, $RegionMarkupAmount, $NonShippingDiscount, $GiftCertificateDiscount, $DiscountMethodID, $DiscountString, $CouponCode, $BelongsToOrderID, $ShippingEstimateCity, $ShippingEstimateStateCode, $ShippingEstimatePostalCode, $ShippingEstimateCountryCode, $ShippingBilledToAccount, $AdditionalFeesString, $CustomerPaymentMethodID, $PaymentMethodID, $PaymentCartOnly, $ErrorText, $ShippingErrorText, $ShippingNotice, $Message, $ShippingClassificationListString, $ShippingMethodListString, $MustCallForShipping, $ShippingNotAvailableToArea, $CanOverrideShippableRegions, $StoreCardTypeID, $ShippingMethodChosen, $CartColTrans)
  {
    $this->IsEditMode = $IsEditMode;
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->CartInfoID = $CartInfoID;
    $this->CartName = $CartName;
    $this->CartType = $CartType;
    $this->CustomerID = $CustomerID;
    $this->PubliclyViewable = $PubliclyViewable;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
    $this->StoreID = $StoreID;
    $this->SessionID = $SessionID;
    $this->DiscountTotal = $DiscountTotal;
    $this->SubTotal = $SubTotal;
    $this->ShippingTotal = $ShippingTotal;
    $this->HandlingTotal = $HandlingTotal;
    $this->TaxTotal = $TaxTotal;
    $this->GrandTotal = $GrandTotal;
    $this->TaxRate = $TaxRate;
    $this->AdditionalFeesTotal = $AdditionalFeesTotal;
    $this->ShippingTotalAfterDiscount = $ShippingTotalAfterDiscount;
    $this->RegionMarkupAmount = $RegionMarkupAmount;
    $this->NonShippingDiscount = $NonShippingDiscount;
    $this->GiftCertificateDiscount = $GiftCertificateDiscount;
    $this->DiscountMethodID = $DiscountMethodID;
    $this->DiscountString = $DiscountString;
    $this->CouponCode = $CouponCode;
    $this->BelongsToOrderID = $BelongsToOrderID;
    $this->ShippingEstimateCity = $ShippingEstimateCity;
    $this->ShippingEstimateStateCode = $ShippingEstimateStateCode;
    $this->ShippingEstimatePostalCode = $ShippingEstimatePostalCode;
    $this->ShippingEstimateCountryCode = $ShippingEstimateCountryCode;
    $this->ShippingBilledToAccount = $ShippingBilledToAccount;
    $this->AdditionalFeesString = $AdditionalFeesString;
    $this->CustomerPaymentMethodID = $CustomerPaymentMethodID;
    $this->PaymentMethodID = $PaymentMethodID;
    $this->PaymentCartOnly = $PaymentCartOnly;
    $this->ErrorText = $ErrorText;
    $this->ShippingErrorText = $ShippingErrorText;
    $this->ShippingNotice = $ShippingNotice;
    $this->Message = $Message;
    $this->ShippingClassificationListString = $ShippingClassificationListString;
    $this->ShippingMethodListString = $ShippingMethodListString;
    $this->MustCallForShipping = $MustCallForShipping;
    $this->ShippingNotAvailableToArea = $ShippingNotAvailableToArea;
    $this->CanOverrideShippableRegions = $CanOverrideShippableRegions;
    $this->StoreCardTypeID = $StoreCardTypeID;
    $this->ShippingMethodChosen = $ShippingMethodChosen;
    $this->CartColTrans = $CartColTrans;
  }

}

}
