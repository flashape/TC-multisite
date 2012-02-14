<?php

if (!class_exists("CustomerTypeTrans", false)) 
{
class CustomerTypeTrans
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
   * @var DataInt32 $customerTypeID
   * @access public
   */
  public $customerTypeID;

  /**
   * 
   * @var string $customerType
   * @access public
   */
  public $customerType;

  /**
   * 
   * @var DataInt32 $customerLevel
   * @access public
   */
  public $customerLevel;

  /**
   * 
   * @var string $customerTypeDescription
   * @access public
   */
  public $customerTypeDescription;

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
   * @var DataInt32 $RedirectOnLoginLinkID
   * @access public
   */
  public $RedirectOnLoginLinkID;

  /**
   * 
   * @var boolean $LoginSeePricing
   * @access public
   */
  public $LoginSeePricing;

  /**
   * 
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $customerTypeID
   * @param string $customerType
   * @param DataInt32 $customerLevel
   * @param string $customerTypeDescription
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @param DataInt32 $RedirectOnLoginLinkID
   * @param boolean $LoginSeePricing
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $customerTypeID, $customerType, $customerLevel, $customerTypeDescription, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp, $RedirectOnLoginLinkID, $LoginSeePricing)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->customerTypeID = $customerTypeID;
    $this->customerType = $customerType;
    $this->customerLevel = $customerLevel;
    $this->customerTypeDescription = $customerTypeDescription;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
    $this->RedirectOnLoginLinkID = $RedirectOnLoginLinkID;
    $this->LoginSeePricing = $LoginSeePricing;
  }

}

}
