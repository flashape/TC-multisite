<?php

if (!class_exists("UserRoles_Clone", false)) 
{
class UserRoles_Clone
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
