<?php

if (!class_exists("OrderPaymentFieldTrans", false)) 
{
class OrderPaymentFieldTrans
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
   * @var DataInt32 $orderPaymentFieldID
   * @access public
   */
  public $orderPaymentFieldID;

  /**
   * 
   * @var DataInt32 $orderPaymentID
   * @access public
   */
  public $orderPaymentID;

  /**
   * 
   * @var string $fieldName
   * @access public
   */
  public $fieldName;

  /**
   * 
   * @var string $type
   * @access public
   */
  public $type;

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
   * @param DataInt32 $orderPaymentFieldID
   * @param DataInt32 $orderPaymentID
   * @param string $fieldName
   * @param string $type
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
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $orderPaymentFieldID, $orderPaymentID, $fieldName, $type, $value, $encrypted, $maskValue, $sortOrder, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp, $DEKID)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->orderPaymentFieldID = $orderPaymentFieldID;
    $this->orderPaymentID = $orderPaymentID;
    $this->fieldName = $fieldName;
    $this->type = $type;
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
