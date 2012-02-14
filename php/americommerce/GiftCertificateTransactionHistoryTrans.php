<?php

if (!class_exists("GiftCertificateTransactionHistoryTrans", false)) 
{
class GiftCertificateTransactionHistoryTrans
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
   * @var DataInt32 $TransactionID
   * @access public
   */
  public $TransactionID;

  /**
   * 
   * @var DataInt32 $GiftCertificateID
   * @access public
   */
  public $GiftCertificateID;

  /**
   * 
   * @var GiftCertificateTransactionHistoryActionType $Action
   * @access public
   */
  public $Action;

  /**
   * 
   * @var DataMoney $Amount
   * @access public
   */
  public $Amount;

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
   * @var DataInt32 $OrderID
   * @access public
   */
  public $OrderID;

  /**
   * 
   * @var DataInt32 $OrderPaymentID
   * @access public
   */
  public $OrderPaymentID;

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
   * @var GiftCertificateTransactionHistoryStatusType $Status
   * @access public
   */
  public $Status;

  /**
   * 
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $TransactionID
   * @param DataInt32 $GiftCertificateID
   * @param GiftCertificateTransactionHistoryActionType $Action
   * @param DataMoney $Amount
   * @param boolean $IsPreTaxDiscount
   * @param DataInt32 $GiftCertificateTypeID
   * @param DataInt32 $OrderID
   * @param DataInt32 $OrderPaymentID
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @param GiftCertificateTransactionHistoryStatusType $Status
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $TransactionID, $GiftCertificateID, $Action, $Amount, $IsPreTaxDiscount, $GiftCertificateTypeID, $OrderID, $OrderPaymentID, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp, $Status)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->TransactionID = $TransactionID;
    $this->GiftCertificateID = $GiftCertificateID;
    $this->Action = $Action;
    $this->Amount = $Amount;
    $this->IsPreTaxDiscount = $IsPreTaxDiscount;
    $this->GiftCertificateTypeID = $GiftCertificateTypeID;
    $this->OrderID = $OrderID;
    $this->OrderPaymentID = $OrderPaymentID;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
    $this->Status = $Status;
  }

}

}
