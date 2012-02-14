<?php

if (!class_exists("UserGroupPermission_Clone", false)) 
{
class UserGroupPermission_Clone
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
