<?php

if (!class_exists("UserRoles_Exists", false)) 
{
class UserRoles_Exists
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
