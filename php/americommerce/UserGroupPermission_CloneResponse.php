<?php

if (!class_exists("UserGroupPermission_CloneResponse", false)) 
{
class UserGroupPermission_CloneResponse
{

  /**
   * 
   * @var UserGroupPermissionTrans $UserGroupPermission_CloneResult
   * @access public
   */
  public $UserGroupPermission_CloneResult;

  /**
   * 
   * @param UserGroupPermissionTrans $UserGroupPermission_CloneResult
   * @access public
   */
  public function __construct($UserGroupPermission_CloneResult)
  {
    $this->UserGroupPermission_CloneResult = $UserGroupPermission_CloneResult;
  }

}

}
