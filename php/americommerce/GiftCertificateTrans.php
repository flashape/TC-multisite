<?php

if (!class_exists("GiftCertificateTrans", false)) 
{
class GiftCertificateTrans
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
   * @var DataInt32 $GiftCertificateID
   * @access public
   */
  public $GiftCertificateID;

  /**
   * 
   * @var string $Code
   * @access public
   */
  public $Code;

  /**
   * 
   * @var DataInt32 $OriginalOrderID
   * @access public
   */
  public $OriginalOrderID;

  /**
   * 
   * @var DataInt32 $FromCustomerID
   * @access public
   */
  public $FromCustomerID;

  /**
   * 
   * @var DataInt32 $BatchID
   * @access public
   */
  public $BatchID;

  /**
   * 
   * @var string $RecipientEmail
   * @access public
   */
  public $RecipientEmail;

  /**
   * 
   * @var string $RecipientName
   * @access public
   */
  public $RecipientName;

  /**
   * 
   * @var string $RecipientShippingAddress
   * @access public
   */
  public $RecipientShippingAddress;

  /**
   * 
   * @var string $GiftMessage
   * @access public
   */
  public $GiftMessage;

  /**
   * 
   * @var GiftCertificateStatus $Status
   * @access public
   */
  public $Status;

  /**
   * 
   * @var boolean $IsPreTaxDiscount
   * @access public
   */
  public $IsPreTaxDiscount;

  /**
   * 
   * @var DataInt32 $GiftCertificateTypeID
   * @access public
   */
  public $GiftCertificateTypeID;

  /**
   * 
   * @var string $Comments
   * @access public
   */
  public $Comments;

  /**
   * 
   * @var DataDateTime $CreationDate
   * @access public
   */
  public $CreationDate;

  /**
   * 
   * @var DataDateTime $ExpirationDate
   * @access public
   */
  public $ExpirationDate;

  /**
   * 
   * @var DataInt32 $StoreID
   * @access public
   */
  public $StoreID;

  /**
   * 
   * @var DataMoney $Amount
   * @access public
   */
  public $Amount;

  /**
   * 
   * @var DataMoney $OriginalAmount
   * @access public
   */
  public $OriginalAmount;

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
   * @var DataInt32 $CustomerID
   * @access public
   */
  public $CustomerID;

  /**
   * 
   * @var boolean $Expires
   * @access public
   */
  public $Expires;

  /**
   * 
   * @var DataInt32 $OrderItemsID
   * @access public
   */
  public $OrderItemsID;

  /**
   * 
   * @var array $GiftCertificateTransactionHistoryColTrans
   * @access public
   */
  public $GiftCertificateTransactionHistoryColTrans;

  /**
   * 
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $GiftCertificateID
   * @param string $Code
   * @param DataInt32 $OriginalOrderID
   * @param DataInt32 $FromCustomerID
   * @param DataInt32 $BatchID
   * @param string $RecipientEmail
   * @param string $RecipientName
   * @param string $RecipientShippingAddress
   * @param string $GiftMessage
   * @param GiftCertificateStatus $Status
   * @param boolean $IsPreTaxDiscount
   * @param DataInt32 $GiftCertificateTypeID
   * @param string $Comments
   * @param DataDateTime $CreationDate
   * @param DataDateTime $ExpirationDate
   * @param DataInt32 $StoreID
   * @param DataMoney $Amount
   * @param DataMoney $OriginalAmount
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @param DataInt32 $CustomerID
   * @param boolean $Expires
   * @param DataInt32 $OrderItemsID
   * @param array $GiftCertificateTransactionHistoryColTrans
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $GiftCertificateID, $Code, $OriginalOrderID, $FromCustomerID, $BatchID, $RecipientEmail, $RecipientName, $RecipientShippingAddress, $GiftMessage, $Status, $IsPreTaxDiscount, $GiftCertificateTypeID, $Comments, $CreationDate, $ExpirationDate, $StoreID, $Amount, $OriginalAmount, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp, $CustomerID, $Expires, $OrderItemsID, $GiftCertificateTransactionHistoryColTrans)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->GiftCertificateID = $GiftCertificateID;
    $this->Code = $Code;
    $this->OriginalOrderID = $OriginalOrderID;
    $this->FromCustomerID = $FromCustomerID;
    $this->BatchID = $BatchID;
    $this->RecipientEmail = $RecipientEmail;
    $this->RecipientName = $RecipientName;
    $this->RecipientShippingAddress = $RecipientShippingAddress;
    $this->GiftMessage = $GiftMessage;
    $this->Status = $Status;
    $this->IsPreTaxDiscount = $IsPreTaxDiscount;
    $this->GiftCertificateTypeID = $GiftCertificateTypeID;
    $this->Comments = $Comments;
    $this->CreationDate = $CreationDate;
    $this->ExpirationDate = $ExpirationDate;
    $this->StoreID = $StoreID;
    $this->Amount = $Amount;
    $this->OriginalAmount = $OriginalAmount;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
    $this->CustomerID = $CustomerID;
    $this->Expires = $Expires;
    $this->OrderItemsID = $OrderItemsID;
    $this->GiftCertificateTransactionHistoryColTrans = $GiftCertificateTransactionHistoryColTrans;
  }

}

}
