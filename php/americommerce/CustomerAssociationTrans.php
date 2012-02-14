<?php

if (!class_exists("CustomerAssociationTrans", false)) 
{
class CustomerAssociationTrans
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
   * @var DataInt32 $CustomerAssociationID
   * @access public
   */
  public $CustomerAssociationID;

  /**
   * 
   * @var DataInt32 $AssociationTypeID
   * @access public
   */
  public $AssociationTypeID;

  /**
   * 
   * @var DataInt32 $ParentCustomerID
   * @access public
   */
  public $ParentCustomerID;

  /**
   * 
   * @var DataInt32 $ChildCustomerID
   * @access public
   */
  public $ChildCustomerID;

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
   * @param DataInt32 $CustomerAssociationID
   * @param DataInt32 $AssociationTypeID
   * @param DataInt32 $ParentCustomerID
   * @param DataInt32 $ChildCustomerID
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $CustomerAssociationID, $AssociationTypeID, $ParentCustomerID, $ChildCustomerID, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->CustomerAssociationID = $CustomerAssociationID;
    $this->AssociationTypeID = $AssociationTypeID;
    $this->ParentCustomerID = $ParentCustomerID;
    $this->ChildCustomerID = $ChildCustomerID;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
  }

}

}
