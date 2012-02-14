<?php

if (!class_exists("UserRoles_GetByKey", false)) 
{
class UserRoles_GetByKey
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
