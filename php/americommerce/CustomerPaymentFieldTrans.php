<?php

if (!class_exists("CustomerPaymentFieldTrans", false)) 
{
class CustomerPaymentFieldTrans
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
   * @var DataInt32 $customerPaymentFieldID
   * @access public
   */
  public $customerPaymentFieldID;

  /**
   * 
   * @var DataInt32 $customerPaymentMethodID
   * @access public
   */
  public $customerPaymentMethodID;

  /**
   * 
   * @var string $type
   * @access public
   */
  public $type;

  /**
   * 
   * @var string $fieldName
   * @access public
   */
  public $fieldName;

  /**
   * 
   * @var string $value
   * @access public
   */
  public $value;

  /**
   * 
   * @var boolean $encrypted
   * @access public
   */
  public $encrypted;

  /**
   * 
   * @var boolean $maskValue
   * @access public
   */
  public $maskValue;

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
   * @param DataInt32 $customerPaymentFieldID
   * @param DataInt32 $customerPaymentMethodID
   * @param string $type
   * @param string $fieldName
   * @param string $value
   * @param boolean $encrypted
   * @param boolean $maskValue
   * @param DataInt32 $sortOrder
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @param DataInt32 $DEKID
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $customerPaymentFieldID, $customerPaymentMethodID, $type, $fieldName, $value, $encrypted, $maskValue, $sortOrder, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp, $DEKID)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->customerPaymentFieldID = $customerPaymentFieldID;
    $this->customerPaymentMethodID = $customerPaymentMethodID;
    $this->type = $type;
    $this->fieldName = $fieldName;
    $this->value = $value;
    $this->encrypted = $encrypted;
    $this->maskValue = $maskValue;
    $this->sortOrder = $sortOrder;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
    $this->DEKID = $DEKID;
  }

}

}
