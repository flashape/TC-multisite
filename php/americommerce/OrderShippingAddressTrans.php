<?php

if (!class_exists("OrderShippingAddressTrans", false)) 
{
class OrderShippingAddressTrans
{

  /**
   * 
   * @var StateTrans $StateTrans
   * @access public
   */
  public $StateTrans;

  /**
   * 
   * @var CountryTrans $CountryTrans
   * @access public
   */
  public $CountryTrans;

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
   * @var DataInt32 $orderAddressID
   * @access public
   */
  public $orderAddressID;

  /**
   * 
   * @var DataInt32 $customerID
   * @access public
   */
  public $customerID;

  /**
   * 
   * @var string $Company
   * @access public
   */
  public $Company;

  /**
   * 
   * @var string $Address1
   * @access public
   */
  public $Address1;

  /**
   * 
   * @var string $Address2
   * @access public
   */
  public $Address2;

  /**
   * 
   * @var string $City
   * @access public
   */
  public $City;

  /**
   * 
   * @var DataInt32 $StateID
   * @access public
   */
  public $StateID;

  /**
   * 
   * @var DataInt32 $CountryID
   * @access public
   */
  public $CountryID;

  /**
   * 
   * @var string $ZipCode
   * @access public
   */
  public $ZipCode;

  /**
   * 
   * @var string $Phone
   * @access public
   */
  public $Phone;

  /**
   * 
   * @var string $AltPhone
   * @access public
   */
  public $AltPhone;

  /**
   * 
   * @var string $Fax
   * @access public
   */
  public $Fax;

  /**
   * 
   * @var string $Comments
   * @access public
   */
  public $Comments;

  /**
   * 
   * @var string $NonUSState
   * @access public
   */
  public $NonUSState;

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
   * @param StateTrans $StateTrans
   * @param CountryTrans $CountryTrans
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $orderAddressID
   * @param DataInt32 $customerID
   * @param string $Company
   * @param string $Address1
   * @param string $Address2
   * @param string $City
   * @param DataInt32 $StateID
   * @param DataInt32 $CountryID
   * @param string $ZipCode
   * @param string $Phone
   * @param string $AltPhone
   * @param string $Fax
   * @param string $Comments
   * @param string $NonUSState
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
  public function __construct($StateTrans, $CountryTrans, $IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $orderAddressID, $customerID, $Company, $Address1, $Address2, $City, $StateID, $CountryID, $ZipCode, $Phone, $AltPhone, $Fax, $Comments, $NonUSState, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp, $FirstName, $LastName, $Name)
  {
    $this->StateTrans = $StateTrans;
    $this->CountryTrans = $CountryTrans;
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->orderAddressID = $orderAddressID;
    $this->customerID = $customerID;
    $this->Company = $Company;
    $this->Address1 = $Address1;
    $this->Address2 = $Address2;
    $this->City = $City;
    $this->StateID = $StateID;
    $this->CountryID = $CountryID;
    $this->ZipCode = $ZipCode;
    $this->Phone = $Phone;
    $this->AltPhone = $AltPhone;
    $this->Fax = $Fax;
    $this->Comments = $Comments;
    $this->NonUSState = $NonUSState;
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
