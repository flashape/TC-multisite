<?php

if (!class_exists("UserGroupPermission_Validate", false)) 
{
class UserGroupPermission_Validate
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
