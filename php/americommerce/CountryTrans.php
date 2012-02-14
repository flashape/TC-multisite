<?php

if (!class_exists("CountryTrans", false)) 
{
class CountryTrans
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
   * @var DataInt32 $countryID
   * @access public
   */
  public $countryID;

  /**
   * 
   * @var string $countryCode
   * @access public
   */
  public $countryCode;

  /**
   * 
   * @var string $country
   * @access public
   */
  public $country;

  /**
   * 
   * @var DataInt32 $countryNumber
   * @access public
   */
  public $countryNumber;

  /**
   * 
   * @var string $CountryCodeLong
   * @access public
   */
  public $CountryCodeLong;

  /**
   * 
   * @var DataInt32 $SortOrder
   * @access public
   */
  public $SortOrder;

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
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $countryID
   * @param string $countryCode
   * @param string $country
   * @param DataInt32 $countryNumber
   * @param string $CountryCodeLong
   * @param DataInt32 $SortOrder
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $countryID, $countryCode, $country, $countryNumber, $CountryCodeLong, $SortOrder, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->countryID = $countryID;
    $this->countryCode = $countryCode;
    $this->country = $country;
    $this->countryNumber = $countryNumber;
    $this->CountryCodeLong = $CountryCodeLong;
    $this->SortOrder = $SortOrder;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
  }

}

}
