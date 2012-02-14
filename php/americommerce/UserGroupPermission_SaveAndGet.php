<?php

if (!class_exists("UserGroupPermission_SaveAndGet", false)) 
{
class UserGroupPermission_SaveAndGet
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
