<?php

if (!class_exists("RegionsTrans", false)) 
{
class RegionsTrans
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
   * @var DataInt32 $regionID
   * @access public
   */
  public $regionID;

  /**
   * 
   * @var string $zipcodes
   * @access public
   */
  public $zipcodes;

  /**
   * 
   * @var string $regionName
   * @access public
   */
  public $regionName;

  /**
   * 
   * @var string $states
   * @access public
   */
  public $states;

  /**
   * 
   * @var string $countries
   * @access public
   */
  public $countries;

  /**
   * 
   * @var ShippingMarkupType $MarkupType
   * @access public
   */
  public $MarkupType;

  /**
   * 
   * @var DataMoney $MarkupAmount
   * @access public
   */
  public $MarkupAmount;

  /**
   * 
   * @var DataInt32 $sortOrder
   * @access public
   */
  public $sortOrder;

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
   * @var string $RegionType
   * @access public
   */
  public $RegionType;

  /**
   * 
   * @var DataInt32 $PostalCodeCountryID
   * @access public
   */
  public $PostalCodeCountryID;

  /**
   * 
   * @var boolean $ShippingRegion
   * @access public
   */
  public $ShippingRegion;

  /**
   * 
   * @var boolean $TaxRegion
   * @access public
   */
  public $TaxRegion;

  /**
   * 
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $regionID
   * @param string $zipcodes
   * @param string $regionName
   * @param string $states
   * @param string $countries
   * @param ShippingMarkupType $MarkupType
   * @param DataMoney $MarkupAmount
   * @param DataInt32 $sortOrder
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @param string $RegionType
   * @param DataInt32 $PostalCodeCountryID
   * @param boolean $ShippingRegion
   * @param boolean $TaxRegion
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $regionID, $zipcodes, $regionName, $states, $countries, $MarkupType, $MarkupAmount, $sortOrder, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp, $RegionType, $PostalCodeCountryID, $ShippingRegion, $TaxRegion)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->regionID = $regionID;
    $this->zipcodes = $zipcodes;
    $this->regionName = $regionName;
    $this->states = $states;
    $this->countries = $countries;
    $this->MarkupType = $MarkupType;
    $this->MarkupAmount = $MarkupAmount;
    $this->sortOrder = $sortOrder;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
    $this->RegionType = $RegionType;
    $this->PostalCodeCountryID = $PostalCodeCountryID;
    $this->ShippingRegion = $ShippingRegion;
    $this->TaxRegion = $TaxRegion;
  }

}

}
