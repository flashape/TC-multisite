<?php

if (!class_exists("CustomerPaymentMethodTrans", false)) 
{
class CustomerPaymentMethodTrans
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
   * @var DataInt32 $customerPaymentMethodID
   * @access public
   */
  public $customerPaymentMethodID;

  /**
   * 
   * @var DataInt32 $paymentMethodID
   * @access public
   */
  public $paymentMethodID;

  /**
   * 
   * @var DataInt32 $customerID
   * @access public
   */
  public $customerID;

  /**
   * 
   * @var PaymentTypes $paymentType
   * @access public
   */
  public $paymentType;

  /**
   * 
   * @var DataInt32 $defaultMethod
   * @access public
   */
  public $defaultMethod;

  /**
   * 
   * @var DataInt32 $cardID
   * @access public
   */
  public $cardID;

  /**
   * 
   * @var string $PaymentTypeName
   * @access public
   */
  public $PaymentTypeName;

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
   * @var array $CustomerPaymentFieldColTrans
   * @access public
   */
  public $CustomerPaymentFieldColTrans;

  /**
   * 
   * @var string $PaymentTypeMasked
   * @access public
   */
  public $PaymentTypeMasked;

  /**
   * 
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $customerPaymentMethodID
   * @param DataInt32 $paymentMethodID
   * @param DataInt32 $customerID
   * @param PaymentTypes $paymentType
   * @param DataInt32 $defaultMethod
   * @param DataInt32 $cardID
   * @param string $PaymentTypeName
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @param array $CustomerPaymentFieldColTrans
   * @param string $PaymentTypeMasked
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $customerPaymentMethodID, $paymentMethodID, $customerID, $paymentType, $defaultMethod, $cardID, $PaymentTypeName, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp, $CustomerPaymentFieldColTrans, $PaymentTypeMasked)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->customerPaymentMethodID = $customerPaymentMethodID;
    $this->paymentMethodID = $paymentMethodID;
    $this->customerID = $customerID;
    $this->paymentType = $paymentType;
    $this->defaultMethod = $defaultMethod;
    $this->cardID = $cardID;
    $this->PaymentTypeName = $PaymentTypeName;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
    $this->CustomerPaymentFieldColTrans = $CustomerPaymentFieldColTrans;
    $this->PaymentTypeMasked = $PaymentTypeMasked;
  }

}

}
