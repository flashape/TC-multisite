<?php

if (!class_exists("PaymentMethodTrans", false)) 
{
class PaymentMethodTrans
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
   * @var DataInt32 $paymentMethodID
   * @access public
   */
  public $paymentMethodID;

  /**
   * 
   * @var PaymentTypes $paymentType
   * @access public
   */
  public $paymentType;

  /**
   * 
   * @var DataDecimal $costModifier
   * @access public
   */
  public $costModifier;

  /**
   * 
   * @var PaymentMethodCostModifierType $costModifierType
   * @access public
   */
  public $costModifierType;

  /**
   * 
   * @var DataInt32 $sortOrder
   * @access public
   */
  public $sortOrder;

  /**
   * 
   * @var boolean $hide
   * @access public
   */
  public $hide;

  /**
   * 
   * @var string $description
   * @access public
   */
  public $description;

  /**
   * 
   * @var string $confirmationMessage
   * @access public
   */
  public $confirmationMessage;

  /**
   * 
   * @var string $declinedMessage
   * @access public
   */
  public $declinedMessage;

  /**
   * 
   * @var boolean $isGateway
   * @access public
   */
  public $isGateway;

  /**
   * 
   * @var string $gatewayName
   * @access public
   */
  public $gatewayName;

  /**
   * 
   * @var base64Binary $bMerchantID
   * @access public
   */
  public $bMerchantID;

  /**
   * 
   * @var base64Binary $bPassword
   * @access public
   */
  public $bPassword;

  /**
   * 
   * @var boolean $activeGateway
   * @access public
   */
  public $activeGateway;

  /**
   * 
   * @var boolean $isCustom
   * @access public
   */
  public $isCustom;

  /**
   * 
   * @var boolean $useTransactionKey
   * @access public
   */
  public $useTransactionKey;

  /**
   * 
   * @var boolean $authOnly
   * @access public
   */
  public $authOnly;

  /**
   * 
   * @var boolean $hasEChecks
   * @access public
   */
  public $hasEChecks;

  /**
   * 
   * @var boolean $acceptEChecks
   * @access public
   */
  public $acceptEChecks;

  /**
   * 
   * @var string $GatewayEnum
   * @access public
   */
  public $GatewayEnum;

  /**
   * 
   * @var string $paymentTypeName
   * @access public
   */
  public $paymentTypeName;

  /**
   * 
   * @var string $AlternateUrl
   * @access public
   */
  public $AlternateUrl;

  /**
   * 
   * @var string $APISignature
   * @access public
   */
  public $APISignature;

  /**
   * 
   * @var string $ConfigStringArray
   * @access public
   */
  public $ConfigStringArray;

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
   * @var DataInt32 $ECheckSortOrder
   * @access public
   */
  public $ECheckSortOrder;

  /**
   * 
   * @var DataInt32 $DEKID
   * @access public
   */
  public $DEKID;

  /**
   * 
   * @var boolean $ShowCreditCardFormOnCustomMethod
   * @access public
   */
  public $ShowCreditCardFormOnCustomMethod;

  /**
   * 
   * @var array $PaymentMethodFieldColTrans
   * @access public
   */
  public $PaymentMethodFieldColTrans;

  /**
   * 
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $paymentMethodID
   * @param PaymentTypes $paymentType
   * @param DataDecimal $costModifier
   * @param PaymentMethodCostModifierType $costModifierType
   * @param DataInt32 $sortOrder
   * @param boolean $hide
   * @param string $description
   * @param string $confirmationMessage
   * @param string $declinedMessage
   * @param boolean $isGateway
   * @param string $gatewayName
   * @param base64Binary $bMerchantID
   * @param base64Binary $bPassword
   * @param boolean $activeGateway
   * @param boolean $isCustom
   * @param boolean $useTransactionKey
   * @param boolean $authOnly
   * @param boolean $hasEChecks
   * @param boolean $acceptEChecks
   * @param string $GatewayEnum
   * @param string $paymentTypeName
   * @param string $AlternateUrl
   * @param string $APISignature
   * @param string $ConfigStringArray
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @param DataInt32 $ECheckSortOrder
   * @param DataInt32 $DEKID
   * @param boolean $ShowCreditCardFormOnCustomMethod
   * @param array $PaymentMethodFieldColTrans
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $paymentMethodID, $paymentType, $costModifier, $costModifierType, $sortOrder, $hide, $description, $confirmationMessage, $declinedMessage, $isGateway, $gatewayName, $bMerchantID, $bPassword, $activeGateway, $isCustom, $useTransactionKey, $authOnly, $hasEChecks, $acceptEChecks, $GatewayEnum, $paymentTypeName, $AlternateUrl, $APISignature, $ConfigStringArray, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp, $ECheckSortOrder, $DEKID, $ShowCreditCardFormOnCustomMethod, $PaymentMethodFieldColTrans)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->paymentMethodID = $paymentMethodID;
    $this->paymentType = $paymentType;
    $this->costModifier = $costModifier;
    $this->costModifierType = $costModifierType;
    $this->sortOrder = $sortOrder;
    $this->hide = $hide;
    $this->description = $description;
    $this->confirmationMessage = $confirmationMessage;
    $this->declinedMessage = $declinedMessage;
    $this->isGateway = $isGateway;
    $this->gatewayName = $gatewayName;
    $this->bMerchantID = $bMerchantID;
    $this->bPassword = $bPassword;
    $this->activeGateway = $activeGateway;
    $this->isCustom = $isCustom;
    $this->useTransactionKey = $useTransactionKey;
    $this->authOnly = $authOnly;
    $this->hasEChecks = $hasEChecks;
    $this->acceptEChecks = $acceptEChecks;
    $this->GatewayEnum = $GatewayEnum;
    $this->paymentTypeName = $paymentTypeName;
    $this->AlternateUrl = $AlternateUrl;
    $this->APISignature = $APISignature;
    $this->ConfigStringArray = $ConfigStringArray;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
    $this->ECheckSortOrder = $ECheckSortOrder;
    $this->DEKID = $DEKID;
    $this->ShowCreditCardFormOnCustomMethod = $ShowCreditCardFormOnCustomMethod;
    $this->PaymentMethodFieldColTrans = $PaymentMethodFieldColTrans;
  }

}

}
