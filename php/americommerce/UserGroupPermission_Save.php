<?php

if (!class_exists("UserGroupPermission_Save", false)) 
{
class UserGroupPermission_Save
{

  /**
   * 
   * @var UserGroupPermissionTrans $poUserGroupPermissionTrans
   * @access public
   */
  public $poUserGroupPermissionTrans;

  /**
   * 
   * @param UserGroupPermissionTrans $poUserGroupPermissionTrans
   * @access public
   */
  public function __construct($poUserGroupPermissionTrans)
  {
    $this->poUserGroupPermissionTrans = $poUserGroupPermissionTrans;
  }

}

}
