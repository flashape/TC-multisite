<?php

if (!class_exists("UserGroupPermission_Delete", false)) 
{
class UserGroupPermission_Delete
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
