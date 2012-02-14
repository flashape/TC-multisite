<?php

if (!class_exists("UserGroupPermissionTrans", false)) 
{
class UserGroupPermissionTrans
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
   * @var DataInt32 $PermissionID
   * @access public
   */
  public $PermissionID;

  /**
   * 
   * @var DataInt32 $UserGroupID
   * @access public
   */
  public $UserGroupID;

  /**
   * 
   * @var string $Area
   * @access public
   */
  public $Area;

  /**
   * 
   * @var boolean $AllowCreate
   * @access public
   */
  public $AllowCreate;

  /**
   * 
   * @var boolean $AllowRead
   * @access public
   */
  public $AllowRead;

  /**
   * 
   * @var boolean $AllowUpdate
   * @access public
   */
  public $AllowUpdate;

  /**
   * 
   * @var boolean $AllowDelete
   * @access public
   */
  public $AllowDelete;

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
   * @param DataInt32 $PermissionID
   * @param DataInt32 $UserGroupID
   * @param string $Area
   * @param boolean $AllowCreate
   * @param boolean $AllowRead
   * @param boolean $AllowUpdate
   * @param boolean $AllowDelete
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $PermissionID, $UserGroupID, $Area, $AllowCreate, $AllowRead, $AllowUpdate, $AllowDelete, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->PermissionID = $PermissionID;
    $this->UserGroupID = $UserGroupID;
    $this->Area = $Area;
    $this->AllowCreate = $AllowCreate;
    $this->AllowRead = $AllowRead;
    $this->AllowUpdate = $AllowUpdate;
    $this->AllowDelete = $AllowDelete;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
  }

}

}
