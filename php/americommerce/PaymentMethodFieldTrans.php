<?php

if (!class_exists("PaymentMethodFieldTrans", false)) 
{
class PaymentMethodFieldTrans
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
   * @var DataInt32 $paymentMethodFieldID
   * @access public
   */
  public $paymentMethodFieldID;

  /**
   * 
   * @var DataInt32 $paymentMethodID
   * @access public
   */
  public $paymentMethodID;

  /**
   * 
   * @var string $fieldName
   * @access public
   */
  public $fieldName;

  /**
   * 
   * @var DataInt32 $length
   * @access public
   */
  public $length;

  /**
   * 
   * @var DataInt32 $sortOrder
   * @access public
   */
  public $sortOrder;

  /**
   * 
   * @var string $type
   * @access public
   */
  public $type;

  /**
   * 
   * @var boolean $required
   * @access public
   */
  public $required;

  /**
   * 
   * @var boolean $hide
   * @access public
   */
  public $hide;

  /**
   * 
   * @var boolean $encrypt
   * @access public
   */
  public $encrypt;

  /**
   * 
   * @var boolean $maskValue
   * @access public
   */
  public $maskValue;

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
   * @param DataInt32 $paymentMethodFieldID
   * @param DataInt32 $paymentMethodID
   * @param string $fieldName
   * @param DataInt32 $length
   * @param DataInt32 $sortOrder
   * @param string $type
   * @param boolean $required
   * @param boolean $hide
   * @param boolean $encrypt
   * @param boolean $maskValue
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @param DataInt32 $DEKID
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $paymentMethodFieldID, $paymentMethodID, $fieldName, $length, $sortOrder, $type, $required, $hide, $encrypt, $maskValue, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp, $DEKID)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->paymentMethodFieldID = $paymentMethodFieldID;
    $this->paymentMethodID = $paymentMethodID;
    $this->fieldName = $fieldName;
    $this->length = $length;
    $this->sortOrder = $sortOrder;
    $this->type = $type;
    $this->required = $required;
    $this->hide = $hide;
    $this->encrypt = $encrypt;
    $this->maskValue = $maskValue;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
    $this->DEKID = $DEKID;
  }

}

}
