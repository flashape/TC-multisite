<?php

if (!class_exists("GiftCertificateBatchTrans", false)) 
{
class GiftCertificateBatchTrans
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
   * @var DataInt32 $GiftCertificateBatchID
   * @access public
   */
  public $GiftCertificateBatchID;

  /**
   * 
   * @var string $BatchName
   * @access public
   */
  public $BatchName;

  /**
   * 
   * @var string $Comments
   * @access public
   */
  public $Comments;

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
   * @var DataInt32 $GiftCertificateTypeID
   * @access public
   */
  public $GiftCertificateTypeID;

  /**
   * 
   * @var array $GiftCertificateColTrans
   * @access public
   */
  public $GiftCertificateColTrans;

  /**
   * 
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $GiftCertificateBatchID
   * @param string $BatchName
   * @param string $Comments
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @param DataInt32 $GiftCertificateTypeID
   * @param array $GiftCertificateColTrans
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $GiftCertificateBatchID, $BatchName, $Comments, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp, $GiftCertificateTypeID, $GiftCertificateColTrans)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->GiftCertificateBatchID = $GiftCertificateBatchID;
    $this->BatchName = $BatchName;
    $this->Comments = $Comments;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
    $this->GiftCertificateTypeID = $GiftCertificateTypeID;
    $this->GiftCertificateColTrans = $GiftCertificateColTrans;
  }

}

}
