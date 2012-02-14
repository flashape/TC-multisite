<?php

if (!class_exists("CreditCardTrans", false)) 
{
class CreditCardTrans
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
   * @var DataInt32 $cardID
   * @access public
   */
  public $cardID;

  /**
   * 
   * @var DataInt32 $customerID
   * @access public
   */
  public $customerID;

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
   * @var string $billPhone
   * @access public
   */
  public $billPhone;

  /**
   * 
   * @var string $billAddress1
   * @access public
   */
  public $billAddress1;

  /**
   * 
   * @var string $billAddress2
   * @access public
   */
  public $billAddress2;

  /**
   * 
   * @var string $billCity
   * @access public
   */
  public $billCity;

  /**
   * 
   * @var DataInt32 $billStateID
   * @access public
   */
  public $billStateID;

  /**
   * 
   * @var string $billZipCode
   * @access public
   */
  public $billZipCode;

  /**
   * 
   * @var DataInt32 $billCountryID
   * @access public
   */
  public $billCountryID;

  /**
   * 
   * @var string $cccvv
   * @access public
   */
  public $cccvv;

  /**
   * 
   * @var DataInt32 $defaultCard
   * @access public
   */
  public $defaultCard;

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
   * @param DataInt32 $cardID
   * @param DataInt32 $customerID
   * @param base64Binary $ccbinary
   * @param DataInt32 $cctypeID
   * @param string $ccexpmonth
   * @param string $ccexpyear
   * @param string $ccname
   * @param string $billPhone
   * @param string $billAddress1
   * @param string $billAddress2
   * @param string $billCity
   * @param DataInt32 $billStateID
   * @param string $billZipCode
   * @param DataInt32 $billCountryID
   * @param string $cccvv
   * @param DataInt32 $defaultCard
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @param base64Binary $cccvvbinary
   * @param DataInt32 $DEKID
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $cardID, $customerID, $ccbinary, $cctypeID, $ccexpmonth, $ccexpyear, $ccname, $billPhone, $billAddress1, $billAddress2, $billCity, $billStateID, $billZipCode, $billCountryID, $cccvv, $defaultCard, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp, $cccvvbinary, $DEKID)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->cardID = $cardID;
    $this->customerID = $customerID;
    $this->ccbinary = $ccbinary;
    $this->cctypeID = $cctypeID;
    $this->ccexpmonth = $ccexpmonth;
    $this->ccexpyear = $ccexpyear;
    $this->ccname = $ccname;
    $this->billPhone = $billPhone;
    $this->billAddress1 = $billAddress1;
    $this->billAddress2 = $billAddress2;
    $this->billCity = $billCity;
    $this->billStateID = $billStateID;
    $this->billZipCode = $billZipCode;
    $this->billCountryID = $billCountryID;
    $this->cccvv = $cccvv;
    $this->defaultCard = $defaultCard;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
    $this->cccvvbinary = $cccvvbinary;
    $this->DEKID = $DEKID;
  }

}

}
