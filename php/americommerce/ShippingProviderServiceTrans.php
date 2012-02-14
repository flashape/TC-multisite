<?php

if (!class_exists("ShippingProviderServiceTrans", false)) 
{
class ShippingProviderServiceTrans
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
   * @var DataInt32 $shippingProviderServiceID
   * @access public
   */
  public $shippingProviderServiceID;

  /**
   * 
   * @var boolean $active
   * @access public
   */
  public $active;

  /**
   * 
   * @var DataInt32 $shippingProviderID
   * @access public
   */
  public $shippingProviderID;

  /**
   * 
   * @var string $identifier
   * @access public
   */
  public $identifier;

  /**
   * 
   * @var string $displayName
   * @access public
   */
  public $displayName;

  /**
   * 
   * @var string $ShippingProviderCode
   * @access public
   */
  public $ShippingProviderCode;

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
   * @var boolean $AllowAPO
   * @access public
   */
  public $AllowAPO;

  /**
   * 
   * @var boolean $AllowPOBOX
   * @access public
   */
  public $AllowPOBOX;

  /**
   * 
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $shippingProviderServiceID
   * @param boolean $active
   * @param DataInt32 $shippingProviderID
   * @param string $identifier
   * @param string $displayName
   * @param string $ShippingProviderCode
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @param boolean $AllowAPO
   * @param boolean $AllowPOBOX
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $shippingProviderServiceID, $active, $shippingProviderID, $identifier, $displayName, $ShippingProviderCode, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp, $AllowAPO, $AllowPOBOX)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->shippingProviderServiceID = $shippingProviderServiceID;
    $this->active = $active;
    $this->shippingProviderID = $shippingProviderID;
    $this->identifier = $identifier;
    $this->displayName = $displayName;
    $this->ShippingProviderCode = $ShippingProviderCode;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
    $this->AllowAPO = $AllowAPO;
    $this->AllowPOBOX = $AllowPOBOX;
  }

}

}
