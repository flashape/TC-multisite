<?php

if (!class_exists("ProductCategoriesTrans", false)) 
{
class ProductCategoriesTrans
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
   * @var DataInt32 $ID
   * @access public
   */
  public $ID;

  /**
   * 
   * @var DataInt32 $ItemID
   * @access public
   */
  public $ItemID;

  /**
   * 
   * @var DataInt32 $CategoryID
   * @access public
   */
  public $CategoryID;

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
   * @var boolean $IsPrimary
   * @access public
   */
  public $IsPrimary;

  /**
   * 
   * @var DataInt32 $MaxOrderQuantity
   * @access public
   */
  public $MaxOrderQuantity;

  /**
   * 
   * @var DataInt32 $MinOrderQuantity
   * @access public
   */
  public $MinOrderQuantity;

  /**
   * 
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $ID
   * @param DataInt32 $ItemID
   * @param DataInt32 $CategoryID
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @param boolean $IsPrimary
   * @param DataInt32 $MaxOrderQuantity
   * @param DataInt32 $MinOrderQuantity
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $ID, $ItemID, $CategoryID, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp, $IsPrimary, $MaxOrderQuantity, $MinOrderQuantity)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->ID = $ID;
    $this->ItemID = $ItemID;
    $this->CategoryID = $CategoryID;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
    $this->IsPrimary = $IsPrimary;
    $this->MaxOrderQuantity = $MaxOrderQuantity;
    $this->MinOrderQuantity = $MinOrderQuantity;
  }

}

}
