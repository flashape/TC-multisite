<?php

if (!class_exists("WarehousesTrans", false)) 
{
class WarehousesTrans
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
   * @var DataInt32 $warehouseID
   * @access public
   */
  public $warehouseID;

  /**
   * 
   * @var string $warehouseName
   * @access public
   */
  public $warehouseName;

  /**
   * 
   * @var string $warehouseCity
   * @access public
   */
  public $warehouseCity;

  /**
   * 
   * @var DataInt32 $warehouseStateID
   * @access public
   */
  public $warehouseStateID;

  /**
   * 
   * @var DataInt32 $warehouseCountryID
   * @access public
   */
  public $warehouseCountryID;

  /**
   * 
   * @var string $warehouseZipCode
   * @access public
   */
  public $warehouseZipCode;

  /**
   * 
   * @var DataInt32 $defaultWarehouse
   * @access public
   */
  public $defaultWarehouse;

  /**
   * 
   * @var string $warehouseEmail
   * @access public
   */
  public $warehouseEmail;

  /**
   * 
   * @var boolean $SendEmailOnPaymentReceived
   * @access public
   */
  public $SendEmailOnPaymentReceived;

  /**
   * 
   * @var string $WarehouseStatusURL
   * @access public
   */
  public $WarehouseStatusURL;

  /**
   * 
   * @var DataInt32 $WarehouseNewOrderEmailID
   * @access public
   */
  public $WarehouseNewOrderEmailID;

  /**
   * 
   * @var DataInt32 $WarehousePaymentReceivedEmailID
   * @access public
   */
  public $WarehousePaymentReceivedEmailID;

  /**
   * 
   * @var string $WarehouseAddressLine1
   * @access public
   */
  public $WarehouseAddressLine1;

  /**
   * 
   * @var string $WarehouseAddressLine2
   * @access public
   */
  public $WarehouseAddressLine2;

  /**
   * 
   * @var string $WarehouseAccountNumber
   * @access public
   */
  public $WarehouseAccountNumber;

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
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $warehouseID
   * @param string $warehouseName
   * @param string $warehouseCity
   * @param DataInt32 $warehouseStateID
   * @param DataInt32 $warehouseCountryID
   * @param string $warehouseZipCode
   * @param DataInt32 $defaultWarehouse
   * @param string $warehouseEmail
   * @param boolean $SendEmailOnPaymentReceived
   * @param string $WarehouseStatusURL
   * @param DataInt32 $WarehouseNewOrderEmailID
   * @param DataInt32 $WarehousePaymentReceivedEmailID
   * @param string $WarehouseAddressLine1
   * @param string $WarehouseAddressLine2
   * @param string $WarehouseAccountNumber
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $warehouseID, $warehouseName, $warehouseCity, $warehouseStateID, $warehouseCountryID, $warehouseZipCode, $defaultWarehouse, $warehouseEmail, $SendEmailOnPaymentReceived, $WarehouseStatusURL, $WarehouseNewOrderEmailID, $WarehousePaymentReceivedEmailID, $WarehouseAddressLine1, $WarehouseAddressLine2, $WarehouseAccountNumber, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->warehouseID = $warehouseID;
    $this->warehouseName = $warehouseName;
    $this->warehouseCity = $warehouseCity;
    $this->warehouseStateID = $warehouseStateID;
    $this->warehouseCountryID = $warehouseCountryID;
    $this->warehouseZipCode = $warehouseZipCode;
    $this->defaultWarehouse = $defaultWarehouse;
    $this->warehouseEmail = $warehouseEmail;
    $this->SendEmailOnPaymentReceived = $SendEmailOnPaymentReceived;
    $this->WarehouseStatusURL = $WarehouseStatusURL;
    $this->WarehouseNewOrderEmailID = $WarehouseNewOrderEmailID;
    $this->WarehousePaymentReceivedEmailID = $WarehousePaymentReceivedEmailID;
    $this->WarehouseAddressLine1 = $WarehouseAddressLine1;
    $this->WarehouseAddressLine2 = $WarehouseAddressLine2;
    $this->WarehouseAccountNumber = $WarehouseAccountNumber;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
  }

}

}
