<?php

if (!class_exists("UserGroupPermission_GetByKeyResponse", false)) 
{
class UserGroupPermission_GetByKeyResponse
{

  /**
   * 
   * @var UserGroupPermissionTrans $UserGroupPermission_GetByKeyResult
   * @access public
   */
  public $UserGroupPermission_GetByKeyResult;

  /**
   * 
   * @param UserGroupPermissionTrans $UserGroupPermission_GetByKeyResult
   * @access public
   */
  public function __construct($UserGroupPermission_GetByKeyResult)
  {
    $this->UserGroupPermission_GetByKeyResult = $UserGroupPermission_GetByKeyResult;
  }

}

}
