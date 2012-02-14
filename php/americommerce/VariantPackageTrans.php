<?php

if (!class_exists("VariantPackageTrans", false)) 
{
class VariantPackageTrans
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
   * @var DataInt32 $VariantPackageID
   * @access public
   */
  public $VariantPackageID;

  /**
   * 
   * @var DataInt32 $ProductID
   * @access public
   */
  public $ProductID;

  /**
   * 
   * @var DataInt32 $VariantGroupID
   * @access public
   */
  public $VariantGroupID;

  /**
   * 
   * @var DataInt32 $DefaultVariantID
   * @access public
   */
  public $DefaultVariantID;

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
   * @param DataInt32 $VariantPackageID
   * @param DataInt32 $ProductID
   * @param DataInt32 $VariantGroupID
   * @param DataInt32 $DefaultVariantID
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $VariantPackageID, $ProductID, $VariantGroupID, $DefaultVariantID, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->VariantPackageID = $VariantPackageID;
    $this->ProductID = $ProductID;
    $this->VariantGroupID = $VariantGroupID;
    $this->DefaultVariantID = $DefaultVariantID;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
  }

}

}
