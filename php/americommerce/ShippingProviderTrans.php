<?php

if (!class_exists("ShippingProviderTrans", false)) 
{
class ShippingProviderTrans
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
   * @var DataInt32 $providerID
   * @access public
   */
  public $providerID;

  /**
   * 
   * @var string $ProviderName
   * @access public
   */
  public $ProviderName;

  /**
   * 
   * @var string $ProviderCode
   * @access public
   */
  public $ProviderCode;

  /**
   * 
   * @var boolean $active
   * @access public
   */
  public $active;

  /**
   * 
   * @var string $username
   * @access public
   */
  public $username;

  /**
   * 
   * @var string $password
   * @access public
   */
  public $password;

  /**
   * 
   * @var string $markupAmount
   * @access public
   */
  public $markupAmount;

  /**
   * 
   * @var string $markupType
   * @access public
   */
  public $markupType;

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
   * @var string $ShippingKey2
   * @access public
   */
  public $ShippingKey2;

  /**
   * 
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $providerID
   * @param string $ProviderName
   * @param string $ProviderCode
   * @param boolean $active
   * @param string $username
   * @param string $password
   * @param string $markupAmount
   * @param string $markupType
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @param string $ShippingKey2
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $providerID, $ProviderName, $ProviderCode, $active, $username, $password, $markupAmount, $markupType, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp, $ShippingKey2)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->providerID = $providerID;
    $this->ProviderName = $ProviderName;
    $this->ProviderCode = $ProviderCode;
    $this->active = $active;
    $this->username = $username;
    $this->password = $password;
    $this->markupAmount = $markupAmount;
    $this->markupType = $markupType;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
    $this->ShippingKey2 = $ShippingKey2;
  }

}

}
