<?php

if (!class_exists("ShippingMethodTrans", false)) 
{
class ShippingMethodTrans
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
   * @var DataInt32 $shippingMethodID
   * @access public
   */
  public $shippingMethodID;

  /**
   * 
   * @var string $shippingMethodName
   * @access public
   */
  public $shippingMethodName;

  /**
   * 
   * @var DataInt32 $active
   * @access public
   */
  public $active;

  /**
   * 
   * @var DataInt32 $defaultMethod
   * @access public
   */
  public $defaultMethod;

  /**
   * 
   * @var string $module
   * @access public
   */
  public $module;

  /**
   * 
   * @var string $markupType
   * @access public
   */
  public $markupType;

  /**
   * 
   * @var string $markupAmount
   * @access public
   */
  public $markupAmount;

  /**
   * 
   * @var string $shippingMethodDescription
   * @access public
   */
  public $shippingMethodDescription;

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
   * @var array $ShippingRuleColTrans
   * @access public
   */
  public $ShippingRuleColTrans;

  /**
   * 
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $shippingMethodID
   * @param string $shippingMethodName
   * @param DataInt32 $active
   * @param DataInt32 $defaultMethod
   * @param string $module
   * @param string $markupType
   * @param string $markupAmount
   * @param string $shippingMethodDescription
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @param array $ShippingRuleColTrans
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $shippingMethodID, $shippingMethodName, $active, $defaultMethod, $module, $markupType, $markupAmount, $shippingMethodDescription, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp, $ShippingRuleColTrans)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->shippingMethodID = $shippingMethodID;
    $this->shippingMethodName = $shippingMethodName;
    $this->active = $active;
    $this->defaultMethod = $defaultMethod;
    $this->module = $module;
    $this->markupType = $markupType;
    $this->markupAmount = $markupAmount;
    $this->shippingMethodDescription = $shippingMethodDescription;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
    $this->ShippingRuleColTrans = $ShippingRuleColTrans;
  }

}

}
