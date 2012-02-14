<?php

if (!class_exists("GiftCertificateTypeTrans", false)) 
{
class GiftCertificateTypeTrans
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
   * @var DataInt32 $GiftCertificateTypeID
   * @access public
   */
  public $GiftCertificateTypeID;

  /**
   * 
   * @var string $GiftCertificateType
   * @access public
   */
  public $GiftCertificateType;

  /**
   * 
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $GiftCertificateTypeID
   * @param string $GiftCertificateType
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $GiftCertificateTypeID, $GiftCertificateType)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->GiftCertificateTypeID = $GiftCertificateTypeID;
    $this->GiftCertificateType = $GiftCertificateType;
  }

}

}
