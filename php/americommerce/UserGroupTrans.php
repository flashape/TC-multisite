<?php

if (!class_exists("UserGroupTrans", false)) 
{
class UserGroupTrans
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
   * @var DataInt32 $userGroupID
   * @access public
   */
  public $userGroupID;

  /**
   * 
   * @var string $userGroupName
   * @access public
   */
  public $userGroupName;

  /**
   * 
   * @var boolean $IsAdmin
   * @access public
   */
  public $IsAdmin;

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
   * @var array $UserGroupPermissionColTrans
   * @access public
   */
  public $UserGroupPermissionColTrans;

  /**
   * 
   * @var UserRolesTrans $UserRolesTrans
   * @access public
   */
  public $UserRolesTrans;

  /**
   * 
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $userGroupID
   * @param string $userGroupName
   * @param boolean $IsAdmin
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @param array $UserGroupPermissionColTrans
   * @param UserRolesTrans $UserRolesTrans
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $userGroupID, $userGroupName, $IsAdmin, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp, $UserGroupPermissionColTrans, $UserRolesTrans)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->userGroupID = $userGroupID;
    $this->userGroupName = $userGroupName;
    $this->IsAdmin = $IsAdmin;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
    $this->UserGroupPermissionColTrans = $UserGroupPermissionColTrans;
    $this->UserRolesTrans = $UserRolesTrans;
  }

}

}
