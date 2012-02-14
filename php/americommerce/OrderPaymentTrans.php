<?php

if (!class_exists("OrderPaymentTrans", false)) 
{
class OrderPaymentTrans
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
   * @var DataInt32 $orderPaymentID
   * @access public
   */
  public $orderPaymentID;

  /**
   * 
   * @var DataInt32 $customerID
   * @access public
   */
  public $customerID;

  /**
   * 
   * @var DataInt32 $orderID
   * @access public
   */
  public $orderID;

  /**
   * 
   * @var DataInt32 $customerPaymentMethodID
   * @access public
   */
  public $customerPaymentMethodID;

  /**
   * 
   * @var DataInt32 $paymentMethodID
   * @access public
   */
  public $paymentMethodID;

  /**
   * 
   * @var PaymentTypes $paymentType
   * @access public
   */
  public $paymentType;

  /**
   * 
   * @var boolean $approved
   * @access public
   */
  public $approved;

  /**
   * 
   * @var boolean $declined
   * @access public
   */
  public $declined;

  /**
   * 
   * @var base64Binary $ccbinary
   * @access public
   */
  public $ccbinary;

  /**
   * 
   * @var DataInt32 $cctypeID
   * @access public
   */
  public $cctypeID;

  /**
   * 
   * @var string $ccexpmonth
   * @access public
   */
  public $ccexpmonth;

  /**
   * 
   * @var string $ccexpyear
   * @access public
   */
  public $ccexpyear;

  /**
   * 
   * @var string $ccname
   * @access public
   */
  public $ccname;

  /**
   * 
   * @var string $cccvv
   * @access public
   */
  public $cccvv;

  /**
   * 
   * @var DataDateTime $paymentDate
   * @access public
   */
  public $paymentDate;

  /**
   * 
   * @var string $approvedDate
   * @access public
   */
  public $approvedDate;

  /**
   * 
   * @var string $authCode
   * @access public
   */
  public $authCode;

  /**
   * 
   * @var string $rejectReason
   * @access public
   */
  public $rejectReason;

  /**
   * 
   * @var string $avsCode
   * @access public
   */
  public $avsCode;

  /**
   * 
   * @var string $paymentTypeName
   * @access public
   */
  public $paymentTypeName;

  /**
   * 
   * @var TransactionTypes $TransactionType
   * @access public
   */
  public $TransactionType;

  /**
   * 
   * @var DataMoney $Amount
   * @access public
   */
  public $Amount;

  /**
   * 
   * @var string $PaymentNote
   * @access public
   */
  public $PaymentNote;

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
   * @var base64Binary $cccvvbinary
   * @access public
   */
  public $cccvvbinary;

  /**
   * 
   * @var DataInt32 $GiftCertificateID
   * @access public
   */
  public $GiftCertificateID;

  /**
   * 
   * @var DataInt32 $GiftCertificateTransactionHistoryID
   * @access public
   */
  public $GiftCertificateTransactionHistoryID;

  /**
   * 
   * @var boolean $Captured
   * @access public
   */
  public $Captured;

  /**
   * 
   * @var string $TransactionID
   * @access public
   */
  public $TransactionID;

  /**
   * 
   * @var DataInt32 $DEKID
   * @access public
   */
  public $DEKID;

  /**
   * 
   * @var array $OrderPaymentFieldColTrans
   * @access public
   */
  public $OrderPaymentFieldColTrans;

  /**
   * 
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $orderPaymentID
   * @param DataInt32 $customerID
   * @param DataInt32 $orderID
   * @param DataInt32 $customerPaymentMethodID
   * @param DataInt32 $paymentMethodID
   * @param PaymentTypes $paymentType
   * @param boolean $approved
   * @param boolean $declined
   * @param base64Binary $ccbinary
   * @param DataInt32 $cctypeID
   * @param string $ccexpmonth
   * @param string $ccexpyear
   * @param string $ccname
   * @param string $cccvv
   * @param DataDateTime $paymentDate
   * @param string $approvedDate
   * @param string $authCode
   * @param string $rejectReason
   * @param string $avsCode
   * @param string $paymentTypeName
   * @param TransactionTypes $TransactionType
   * @param DataMoney $Amount
   * @param string $PaymentNote
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @param base64Binary $cccvvbinary
   * @param DataInt32 $GiftCertificateID
   * @param DataInt32 $GiftCertificateTransactionHistoryID
   * @param boolean $Captured
   * @param string $TransactionID
   * @param DataInt32 $DEKID
   * @param array $OrderPaymentFieldColTrans
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $orderPaymentID, $customerID, $orderID, $customerPaymentMethodID, $paymentMethodID, $paymentType, $approved, $declined, $ccbinary, $cctypeID, $ccexpmonth, $ccexpyear, $ccname, $cccvv, $paymentDate, $approvedDate, $authCode, $rejectReason, $avsCode, $paymentTypeName, $TransactionType, $Amount, $PaymentNote, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp, $cccvvbinary, $GiftCertificateID, $GiftCertificateTransactionHistoryID, $Captured, $TransactionID, $DEKID, $OrderPaymentFieldColTrans)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->orderPaymentID = $orderPaymentID;
    $this->customerID = $customerID;
    $this->orderID = $orderID;
    $this->customerPaymentMethodID = $customerPaymentMethodID;
    $this->paymentMethodID = $paymentMethodID;
    $this->paymentType = $paymentType;
    $this->approved = $approved;
    $this->declined = $declined;
    $this->ccbinary = $ccbinary;
    $this->cctypeID = $cctypeID;
    $this->ccexpmonth = $ccexpmonth;
    $this->ccexpyear = $ccexpyear;
    $this->ccname = $ccname;
    $this->cccvv = $cccvv;
    $this->paymentDate = $paymentDate;
    $this->approvedDate = $approvedDate;
    $this->authCode = $authCode;
    $this->rejectReason = $rejectReason;
    $this->avsCode = $avsCode;
    $this->paymentTypeName = $paymentTypeName;
    $this->TransactionType = $TransactionType;
    $this->Amount = $Amount;
    $this->PaymentNote = $PaymentNote;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
    $this->cccvvbinary = $cccvvbinary;
    $this->GiftCertificateID = $GiftCertificateID;
    $this->GiftCertificateTransactionHistoryID = $GiftCertificateTransactionHistoryID;
    $this->Captured = $Captured;
    $this->TransactionID = $TransactionID;
    $this->DEKID = $DEKID;
    $this->OrderPaymentFieldColTrans = $OrderPaymentFieldColTrans;
  }

}

}
