<?php

if (!class_exists("OrderTrans", false)) 
{
class OrderTrans
{

  /**
   * 
   * @var OrderAddressTrans $OrderBillingAddressTrans
   * @access public
   */
  public $OrderBillingAddressTrans;

  /**
   * 
   * @var OrderAddressTrans $OrderShippingAddressTrans
   * @access public
   */
  public $OrderShippingAddressTrans;

  /**
   * 
   * @var OrderStatusTrans $OrderStatusTrans
   * @access public
   */
  public $OrderStatusTrans;

  /**
   * 
   * @var CustomerTrans $CustomerTrans
   * @access public
   */
  public $CustomerTrans;

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
   * @var DataInt32 $orderID
   * @access public
   */
  public $orderID;

  /**
   * 
   * @var DataInt32 $customerID
   * @access public
   */
  public $customerID;

  /**
   * 
   * @var DataInt32 $customerTypeID
   * @access public
   */
  public $customerTypeID;

  /**
   * 
   * @var string $adCode
   * @access public
   */
  public $adCode;

  /**
   * 
   * @var DataDateTime $orderDate
   * @access public
   */
  public $orderDate;

  /**
   * 
   * @var DataInt32 $orderStatusID
   * @access public
   */
  public $orderStatusID;

  /**
   * 
   * @var string $specialInstructions
   * @access public
   */
  public $specialInstructions;

  /**
   * 
   * @var DataMoney $subTotal
   * @access public
   */
  public $subTotal;

  /**
   * 
   * @var DataMoney $taxAdded
   * @access public
   */
  public $taxAdded;

  /**
   * 
   * @var DataMoney $shippingAdded
   * @access public
   */
  public $shippingAdded;

  /**
   * 
   * @var DataMoney $discountAdded
   * @access public
   */
  public $discountAdded;

  /**
   * 
   * @var DataMoney $total
   * @access public
   */
  public $total;

  /**
   * 
   * @var DataMoney $cost
   * @access public
   */
  public $cost;

  /**
   * 
   * @var string $shippingMethodName
   * @access public
   */
  public $shippingMethodName;

  /**
   * 
   * @var DataInt32 $shippingMethodID
   * @access public
   */
  public $shippingMethodID;

  /**
   * 
   * @var string $discountString
   * @access public
   */
  public $discountString;

  /**
   * 
   * @var string $rejectReason
   * @access public
   */
  public $rejectReason;

  /**
   * 
   * @var string $authCode
   * @access public
   */
  public $authCode;

  /**
   * 
   * @var string $IPAddress
   * @access public
   */
  public $IPAddress;

  /**
   * 
   * @var string $UID
   * @access public
   */
  public $UID;

  /**
   * 
   * @var DataInt32 $QBExport
   * @access public
   */
  public $QBExport;

  /**
   * 
   * @var DataInt32 $QBInvoiceNum
   * @access public
   */
  public $QBInvoiceNum;

  /**
   * 
   * @var DataInt32 $cardID
   * @access public
   */
  public $cardID;

  /**
   * 
   * @var string $referURL
   * @access public
   */
  public $referURL;

  /**
   * 
   * @var string $destURL
   * @access public
   */
  public $destURL;

  /**
   * 
   * @var DataInt32 $orderShippingAddressID
   * @access public
   */
  public $orderShippingAddressID;

  /**
   * 
   * @var DataInt32 $orderBillingAddressID
   * @access public
   */
  public $orderBillingAddressID;

  /**
   * 
   * @var DataInt32 $orderPaymentID
   * @access public
   */
  public $orderPaymentID;

  /**
   * 
   * @var string $trackingCode
   * @access public
   */
  public $trackingCode;

  /**
   * 
   * @var string $trackingURL
   * @access public
   */
  public $trackingURL;

  /**
   * 
   * @var string $comments
   * @access public
   */
  public $comments;

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
   * @var DataInt32 $PPC
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
   * @var DataInt32 $IsLoad
   * @access public
   */
  public $IsLoad;

  /**
   * 
   * @var DataInt32 $IsInitial
   * @access public
   */
  public $IsInitial;

  /**
   * 
   * @var DataInt32 $AffiliateID
   * @access public
   */
  public $AffiliateID;

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
   * @var DataDateTime $ShipDate
   * @access public
   */
  public $ShipDate;

  /**
   * 
   * @var DataMoney $handlingAdded
   * @access public
   */
  public $handlingAdded;

  /**
   * 
   * @var string $MfrInvoiceNumber
   * @access public
   */
  public $MfrInvoiceNumber;

  /**
   * 
   * @var DataMoney $MfrInvoiceAmount
   * @access public
   */
  public $MfrInvoiceAmount;

  /**
   * 
   * @var boolean $PaymentOrderOnly
   * @access public
   */
  public $PaymentOrderOnly;

  /**
   * 
   * @var string $ShippingProviderServiceName
   * @access public
   */
  public $ShippingProviderServiceName;

  /**
   * 
   * @var boolean $MfgInvoicePaid
   * @access public
   */
  public $MfgInvoicePaid;

  /**
   * 
   * @var boolean $QBUpdate
   * @access public
   */
  public $QBUpdate;

  /**
   * 
   * @var DataMoney $AdditionalFees
   * @access public
   */
  public $AdditionalFees;

  /**
   * 
   * @var string $AdditionalFeesString
   * @access public
   */
  public $AdditionalFeesString;

  /**
   * 
   * @var DataInt32 $DiscountMethodID
   * @access public
   */
  public $DiscountMethodID;

  /**
   * 
   * @var DataInt32 $AdCodeID
   * @access public
   */
  public $AdCodeID;

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
   * @var boolean $IsGift
   * @access public
   */
  public $IsGift;

  /**
   * 
   * @var string $GiftMessage
   * @access public
   */
  public $GiftMessage;

  /**
   * 
   * @var string $CommentsPublic
   * @access public
   */
  public $CommentsPublic;

  /**
   * 
   * @var string $CommentsInstructions
   * @access public
   */
  public $CommentsInstructions;

  /**
   * 
   * @var string $PayPalExpressEmail
   * @access public
   */
  public $PayPalExpressEmail;

  /**
   * 
   * @var string $GoogleCheckoutOrderNumber
   * @access public
   */
  public $GoogleCheckoutOrderNumber;

  /**
   * 
   * @var DataInt32 $BatchID
   * @access public
   */
  public $BatchID;

  /**
   * 
   * @var string $SourceGroup
   * @access public
   */
  public $SourceGroup;

  /**
   * 
   * @var string $PayPalTransactionID
   * @access public
   */
  public $PayPalTransactionID;

  /**
   * 
   * @var DataInt32 $Batch2ID
   * @access public
   */
  public $Batch2ID;

  /**
   * 
   * @var DataInt32 $FromSubscriptionID
   * @access public
   */
  public $FromSubscriptionID;

  /**
   * 
   * @var QBExportTypeOverride $QBExportTypeOverride
   * @access public
   */
  public $QBExportTypeOverride;

  /**
   * 
   * @var DataInt32 $PreviousOrderStatusID
   * @access public
   */
  public $PreviousOrderStatusID;

  /**
   * 
   * @var DataDateTime $OrderStatusLastChangedOn
   * @access public
   */
  public $OrderStatusLastChangedOn;

  /**
   * 
   * @var DataDateTime $OrderTimedFollowupLastRun
   * @access public
   */
  public $OrderTimedFollowupLastRun;

  /**
   * 
   * @var DataMoney $ShippingTotalAfterDiscount
   * @access public
   */
  public $ShippingTotalAfterDiscount;

  /**
   * 
   * @var array $OrderItemColTrans
   * @access public
   */
  public $OrderItemColTrans;

  /**
   * 
   * @var array $OrderPaymentColTrans
   * @access public
   */
  public $OrderPaymentColTrans;

  /**
   * 
   * @var array $OrderExtendedShippingColTrans
   * @access public
   */
  public $OrderExtendedShippingColTrans;

  /**
   * 
   * @var array $OrderShippingColTrans
   * @access public
   */
  public $OrderShippingColTrans;

  /**
   * 
   * @var array $GiftCertificateTransactionHistoryColTrans
   * @access public
   */
  public $GiftCertificateTransactionHistoryColTrans;

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
   * @param OrderAddressTrans $OrderBillingAddressTrans
   * @param OrderAddressTrans $OrderShippingAddressTrans
   * @param OrderStatusTrans $OrderStatusTrans
   * @param CustomerTrans $CustomerTrans
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $orderID
   * @param DataInt32 $customerID
   * @param DataInt32 $customerTypeID
   * @param string $adCode
   * @param DataDateTime $orderDate
   * @param DataInt32 $orderStatusID
   * @param string $specialInstructions
   * @param DataMoney $subTotal
   * @param DataMoney $taxAdded
   * @param DataMoney $shippingAdded
   * @param DataMoney $discountAdded
   * @param DataMoney $total
   * @param DataMoney $cost
   * @param string $shippingMethodName
   * @param DataInt32 $shippingMethodID
   * @param string $discountString
   * @param string $rejectReason
   * @param string $authCode
   * @param string $IPAddress
   * @param string $UID
   * @param DataInt32 $QBExport
   * @param DataInt32 $QBInvoiceNum
   * @param DataInt32 $cardID
   * @param string $referURL
   * @param string $destURL
   * @param DataInt32 $orderShippingAddressID
   * @param DataInt32 $orderBillingAddressID
   * @param DataInt32 $orderPaymentID
   * @param string $trackingCode
   * @param string $trackingURL
   * @param string $comments
   * @param string $Source
   * @param string $SearchPhrase
   * @param DataInt32 $PPC
   * @param string $PPCKeyword
   * @param DataInt32 $IsLoad
   * @param DataInt32 $IsInitial
   * @param DataInt32 $AffiliateID
   * @param DataInt32 $StoreID
   * @param DataInt32 $SessionID
   * @param DataDateTime $ShipDate
   * @param DataMoney $handlingAdded
   * @param string $MfrInvoiceNumber
   * @param DataMoney $MfrInvoiceAmount
   * @param boolean $PaymentOrderOnly
   * @param string $ShippingProviderServiceName
   * @param boolean $MfgInvoicePaid
   * @param boolean $QBUpdate
   * @param DataMoney $AdditionalFees
   * @param string $AdditionalFeesString
   * @param DataInt32 $DiscountMethodID
   * @param DataInt32 $AdCodeID
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @param boolean $IsGift
   * @param string $GiftMessage
   * @param string $CommentsPublic
   * @param string $CommentsInstructions
   * @param string $PayPalExpressEmail
   * @param string $GoogleCheckoutOrderNumber
   * @param DataInt32 $BatchID
   * @param string $SourceGroup
   * @param string $PayPalTransactionID
   * @param DataInt32 $Batch2ID
   * @param DataInt32 $FromSubscriptionID
   * @param QBExportTypeOverride $QBExportTypeOverride
   * @param DataInt32 $PreviousOrderStatusID
   * @param DataDateTime $OrderStatusLastChangedOn
   * @param DataDateTime $OrderTimedFollowupLastRun
   * @param DataMoney $ShippingTotalAfterDiscount
   * @param array $OrderItemColTrans
   * @param array $OrderPaymentColTrans
   * @param array $OrderExtendedShippingColTrans
   * @param array $OrderShippingColTrans
   * @param array $GiftCertificateTransactionHistoryColTrans
   * @param boolean $ValidateCustomFields
   * @param Dictionary $CustomFields
   * @access public
   */
  public function __construct($OrderBillingAddressTrans, $OrderShippingAddressTrans, $OrderStatusTrans, $CustomerTrans, $IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $orderID, $customerID, $customerTypeID, $adCode, $orderDate, $orderStatusID, $specialInstructions, $subTotal, $taxAdded, $shippingAdded, $discountAdded, $total, $cost, $shippingMethodName, $shippingMethodID, $discountString, $rejectReason, $authCode, $IPAddress, $UID, $QBExport, $QBInvoiceNum, $cardID, $referURL, $destURL, $orderShippingAddressID, $orderBillingAddressID, $orderPaymentID, $trackingCode, $trackingURL, $comments, $Source, $SearchPhrase, $PPC, $PPCKeyword, $IsLoad, $IsInitial, $AffiliateID, $StoreID, $SessionID, $ShipDate, $handlingAdded, $MfrInvoiceNumber, $MfrInvoiceAmount, $PaymentOrderOnly, $ShippingProviderServiceName, $MfgInvoicePaid, $QBUpdate, $AdditionalFees, $AdditionalFeesString, $DiscountMethodID, $AdCodeID, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp, $IsGift, $GiftMessage, $CommentsPublic, $CommentsInstructions, $PayPalExpressEmail, $GoogleCheckoutOrderNumber, $BatchID, $SourceGroup, $PayPalTransactionID, $Batch2ID, $FromSubscriptionID, $QBExportTypeOverride, $PreviousOrderStatusID, $OrderStatusLastChangedOn, $OrderTimedFollowupLastRun, $ShippingTotalAfterDiscount, $OrderItemColTrans, $OrderPaymentColTrans, $OrderExtendedShippingColTrans, $OrderShippingColTrans, $GiftCertificateTransactionHistoryColTrans, $ValidateCustomFields, $CustomFields)
  {
    $this->OrderBillingAddressTrans = $OrderBillingAddressTrans;
    $this->OrderShippingAddressTrans = $OrderShippingAddressTrans;
    $this->OrderStatusTrans = $OrderStatusTrans;
    $this->CustomerTrans = $CustomerTrans;
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->orderID = $orderID;
    $this->customerID = $customerID;
    $this->customerTypeID = $customerTypeID;
    $this->adCode = $adCode;
    $this->orderDate = $orderDate;
    $this->orderStatusID = $orderStatusID;
    $this->specialInstructions = $specialInstructions;
    $this->subTotal = $subTotal;
    $this->taxAdded = $taxAdded;
    $this->shippingAdded = $shippingAdded;
    $this->discountAdded = $discountAdded;
    $this->total = $total;
    $this->cost = $cost;
    $this->shippingMethodName = $shippingMethodName;
    $this->shippingMethodID = $shippingMethodID;
    $this->discountString = $discountString;
    $this->rejectReason = $rejectReason;
    $this->authCode = $authCode;
    $this->IPAddress = $IPAddress;
    $this->UID = $UID;
    $this->QBExport = $QBExport;
    $this->QBInvoiceNum = $QBInvoiceNum;
    $this->cardID = $cardID;
    $this->referURL = $referURL;
    $this->destURL = $destURL;
    $this->orderShippingAddressID = $orderShippingAddressID;
    $this->orderBillingAddressID = $orderBillingAddressID;
    $this->orderPaymentID = $orderPaymentID;
    $this->trackingCode = $trackingCode;
    $this->trackingURL = $trackingURL;
    $this->comments = $comments;
    $this->Source = $Source;
    $this->SearchPhrase = $SearchPhrase;
    $this->PPC = $PPC;
    $this->PPCKeyword = $PPCKeyword;
    $this->IsLoad = $IsLoad;
    $this->IsInitial = $IsInitial;
    $this->AffiliateID = $AffiliateID;
    $this->StoreID = $StoreID;
    $this->SessionID = $SessionID;
    $this->ShipDate = $ShipDate;
    $this->handlingAdded = $handlingAdded;
    $this->MfrInvoiceNumber = $MfrInvoiceNumber;
    $this->MfrInvoiceAmount = $MfrInvoiceAmount;
    $this->PaymentOrderOnly = $PaymentOrderOnly;
    $this->ShippingProviderServiceName = $ShippingProviderServiceName;
    $this->MfgInvoicePaid = $MfgInvoicePaid;
    $this->QBUpdate = $QBUpdate;
    $this->AdditionalFees = $AdditionalFees;
    $this->AdditionalFeesString = $AdditionalFeesString;
    $this->DiscountMethodID = $DiscountMethodID;
    $this->AdCodeID = $AdCodeID;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
    $this->IsGift = $IsGift;
    $this->GiftMessage = $GiftMessage;
    $this->CommentsPublic = $CommentsPublic;
    $this->CommentsInstructions = $CommentsInstructions;
    $this->PayPalExpressEmail = $PayPalExpressEmail;
    $this->GoogleCheckoutOrderNumber = $GoogleCheckoutOrderNumber;
    $this->BatchID = $BatchID;
    $this->SourceGroup = $SourceGroup;
    $this->PayPalTransactionID = $PayPalTransactionID;
    $this->Batch2ID = $Batch2ID;
    $this->FromSubscriptionID = $FromSubscriptionID;
    $this->QBExportTypeOverride = $QBExportTypeOverride;
    $this->PreviousOrderStatusID = $PreviousOrderStatusID;
    $this->OrderStatusLastChangedOn = $OrderStatusLastChangedOn;
    $this->OrderTimedFollowupLastRun = $OrderTimedFollowupLastRun;
    $this->ShippingTotalAfterDiscount = $ShippingTotalAfterDiscount;
    $this->OrderItemColTrans = $OrderItemColTrans;
    $this->OrderPaymentColTrans = $OrderPaymentColTrans;
    $this->OrderExtendedShippingColTrans = $OrderExtendedShippingColTrans;
    $this->OrderShippingColTrans = $OrderShippingColTrans;
    $this->GiftCertificateTransactionHistoryColTrans = $GiftCertificateTransactionHistoryColTrans;
    $this->ValidateCustomFields = $ValidateCustomFields;
    $this->CustomFields = $CustomFields;
  }

}

}
