<?php

if (!class_exists("UserGroupPermission_Exists", false)) 
{
class UserGroupPermission_Exists
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
