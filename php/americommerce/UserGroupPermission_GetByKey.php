<?php

if (!class_exists("UserGroupPermission_GetByKey", false)) 
{
class UserGroupPermission_GetByKey
{

  /**
   * 
   * @var int $piPermissionID
   * @access public
   */
  public $piPermissionID;

  /**
   * 
   * @param int $piPermissionID
   * @access public
   */
  public function __construct($piPermissionID)
  {
    $this->piPermissionID = $piPermissionID;
  }

}

}
