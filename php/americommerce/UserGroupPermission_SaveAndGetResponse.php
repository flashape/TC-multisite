<?php

if (!class_exists("UserGroupPermission_SaveAndGetResponse", false)) 
{
class UserGroupPermission_SaveAndGetResponse
{

  /**
   * 
   * @var UserGroupPermissionTrans $UserGroupPermission_SaveAndGetResult
   * @access public
   */
  public $UserGroupPermission_SaveAndGetResult;

  /**
   * 
   * @param UserGroupPermissionTrans $UserGroupPermission_SaveAndGetResult
   * @access public
   */
  public function __construct($UserGroupPermission_SaveAndGetResult)
  {
    $this->UserGroupPermission_SaveAndGetResult = $UserGroupPermission_SaveAndGetResult;
  }

}

}
