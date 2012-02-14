<?php

if (!class_exists("TaxRatesTrans", false)) 
{
class TaxRatesTrans
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
   * @var DataInt32 $taxRateID
   * @access public
   */
  public $taxRateID;

  /**
   * 
   * @var string $taxName
   * @access public
   */
  public $taxName;

  /**
   * 
   * @var DataDecimal $taxRate
   * @access public
   */
  public $taxRate;

  /**
   * 
   * @var DataInt32 $regionID
   * @access public
   */
  public $regionID;

  /**
   * 
   * @var boolean $taxShipping
   * @access public
   */
  public $taxShipping;

  /**
   * 
   * @var boolean $taxHandling
   * @access public
   */
  public $taxHandling;

  /**
   * 
   * @var DataInt32 $StoreID
   * @access public
   */
  public $StoreID;

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
   * @param DataInt32 $taxRateID
   * @param string $taxName
   * @param DataDecimal $taxRate
   * @param DataInt32 $regionID
   * @param boolean $taxShipping
   * @param boolean $taxHandling
   * @param DataInt32 $StoreID
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $taxRateID, $taxName, $taxRate, $regionID, $taxShipping, $taxHandling, $StoreID, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->taxRateID = $taxRateID;
    $this->taxName = $taxName;
    $this->taxRate = $taxRate;
    $this->regionID = $regionID;
    $this->taxShipping = $taxShipping;
    $this->taxHandling = $taxHandling;
    $this->StoreID = $StoreID;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
  }

}

}
