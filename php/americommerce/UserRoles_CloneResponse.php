<?php

if (!class_exists("UserRoles_CloneResponse", false)) 
{
class UserRoles_CloneResponse
{

  /**
   * 
   * @var UserRolesTrans $UserRoles_CloneResult
   * @access public
   */
  public $UserRoles_CloneResult;

  /**
   * 
   * @param UserRolesTrans $UserRoles_CloneResult
   * @access public
   */
  public function __construct($UserRoles_CloneResult)
  {
    $this->UserRoles_CloneResult = $UserRoles_CloneResult;
  }

}

}
