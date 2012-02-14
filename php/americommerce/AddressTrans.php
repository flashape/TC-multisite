<?php

if (!class_exists("AddressTrans", false)) 
{
class AddressTrans
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
   * @var DataInt32 $shippingAddressID
   * @access public
   */
  public $shippingAddressID;

  /**
   * 
   * @var DataInt32 $customerID
   * @access public
   */
  public $customerID;

  /**
   * 
   * @var string $shipAddress1
   * @access public
   */
  public $shipAddress1;

  /**
   * 
   * @var string $shipAddress2
   * @access public
   */
  public $shipAddress2;

  /**
   * 
   * @var string $shipCity
   * @access public
   */
  public $shipCity;

  /**
   * 
   * @var DataInt32 $shipStateID
   * @access public
   */
  public $shipStateID;

  /**
   * 
   * @var string $shipZipcode
   * @access public
   */
  public $shipZipcode;

  /**
   * 
   * @var DataInt32 $shipCountryID
   * @access public
   */
  public $shipCountryID;

  /**
   * 
   * @var DataInt32 $defaultShippingAddress
   * @access public
   */
  public $defaultShippingAddress;

  /**
   * 
   * @var string $shipPhone
   * @access public
   */
  public $shipPhone;

  /**
   * 
   * @var string $shipCompany
   * @access public
   */
  public $shipCompany;

  /**
   * 
   * @var string $shipAltPhone
   * @access public
   */
  public $shipAltPhone;

  /**
   * 
   * @var string $shipFaxPhone
   * @access public
   */
  public $shipFaxPhone;

  /**
   * 
   * @var string $shipComments
   * @access public
   */
  public $shipComments;

  /**
   * 
   * @var DataInt32 $defaultBillingAddress
   * @access public
   */
  public $defaultBillingAddress;

  /**
   * 
   * @var string $shipNonUSState
   * @access public
   */
  public $shipNonUSState;

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
   * @var string $FirstName
   * @access public
   */
  public $FirstName;

  /**
   * 
   * @var string $LastName
   * @access public
   */
  public $LastName;

  /**
   * 
   * @var string $Name
   * @access public
   */
  public $Name;

  /**
   * 
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $shippingAddressID
   * @param DataInt32 $customerID
   * @param string $shipAddress1
   * @param string $shipAddress2
   * @param string $shipCity
   * @param DataInt32 $shipStateID
   * @param string $shipZipcode
   * @param DataInt32 $shipCountryID
   * @param DataInt32 $defaultShippingAddress
   * @param string $shipPhone
   * @param string $shipCompany
   * @param string $shipAltPhone
   * @param string $shipFaxPhone
   * @param string $shipComments
   * @param DataInt32 $defaultBillingAddress
   * @param string $shipNonUSState
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @param string $FirstName
   * @param string $LastName
   * @param string $Name
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $shippingAddressID, $customerID, $shipAddress1, $shipAddress2, $shipCity, $shipStateID, $shipZipcode, $shipCountryID, $defaultShippingAddress, $shipPhone, $shipCompany, $shipAltPhone, $shipFaxPhone, $shipComments, $defaultBillingAddress, $shipNonUSState, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp, $FirstName, $LastName, $Name)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->shippingAddressID = $shippingAddressID;
    $this->customerID = $customerID;
    $this->shipAddress1 = $shipAddress1;
    $this->shipAddress2 = $shipAddress2;
    $this->shipCity = $shipCity;
    $this->shipStateID = $shipStateID;
    $this->shipZipcode = $shipZipcode;
    $this->shipCountryID = $shipCountryID;
    $this->defaultShippingAddress = $defaultShippingAddress;
    $this->shipPhone = $shipPhone;
    $this->shipCompany = $shipCompany;
    $this->shipAltPhone = $shipAltPhone;
    $this->shipFaxPhone = $shipFaxPhone;
    $this->shipComments = $shipComments;
    $this->defaultBillingAddress = $defaultBillingAddress;
    $this->shipNonUSState = $shipNonUSState;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
    $this->FirstName = $FirstName;
    $this->LastName = $LastName;
    $this->Name = $Name;
  }

}

}
