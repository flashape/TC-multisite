<?php

if (!class_exists("UserRoles_GetByKeyResponse", false)) 
{
class UserRoles_GetByKeyResponse
{

  /**
   * 
   * @var UserRolesTrans $UserRoles_GetByKeyResult
   * @access public
   */
  public $UserRoles_GetByKeyResult;

  /**
   * 
   * @param UserRolesTrans $UserRoles_GetByKeyResult
   * @access public
   */
  public function __construct($UserRoles_GetByKeyResult)
  {
    $this->UserRoles_GetByKeyResult = $UserRoles_GetByKeyResult;
  }

}

}
