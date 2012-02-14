<?php

if (!class_exists("OrderExtendedShippingTrans", false)) 
{
class OrderExtendedShippingTrans
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
   * @var DataInt32 $OrderExtendedShippingID
   * @access public
   */
  public $OrderExtendedShippingID;

  /**
   * 
   * @var DataInt32 $OrderID
   * @access public
   */
  public $OrderID;

  /**
   * 
   * @var string $ShippingClassificationCode
   * @access public
   */
  public $ShippingClassificationCode;

  /**
   * 
   * @var string $shippingMethodName
   * @access public
   */
  public $shippingMethodName;

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
   * @var base64Binary $DateTimeStamp
   * @access public
   */
  public $DateTimeStamp;

  /**
   * 
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $OrderExtendedShippingID
   * @param DataInt32 $OrderID
   * @param string $ShippingClassificationCode
   * @param string $shippingMethodName
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param base64Binary $DateTimeStamp
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $OrderExtendedShippingID, $OrderID, $ShippingClassificationCode, $shippingMethodName, $EnterDate, $EnteredBy, $EditDate, $EditedBy, $DateTimeStamp)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->OrderExtendedShippingID = $OrderExtendedShippingID;
    $this->OrderID = $OrderID;
    $this->ShippingClassificationCode = $ShippingClassificationCode;
    $this->shippingMethodName = $shippingMethodName;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->DateTimeStamp = $DateTimeStamp;
  }

}

}
