<?php

if (!class_exists("UserRoles_Delete", false)) 
{
class UserRoles_Delete
{

  /**
   * 
   * @var int $piuserRoleID
   * @access public
   */
  public $piuserRoleID;

  /**
   * 
   * @param int $piuserRoleID
   * @access public
   */
  public function __construct($piuserRoleID)
  {
    $this->piuserRoleID = $piuserRoleID;
  }

}

}
