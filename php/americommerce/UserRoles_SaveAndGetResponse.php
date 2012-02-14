<?php

if (!class_exists("UserRoles_SaveAndGetResponse", false)) 
{
class UserRoles_SaveAndGetResponse
{

  /**
   * 
   * @var UserRolesTrans $UserRoles_SaveAndGetResult
   * @access public
   */
  public $UserRoles_SaveAndGetResult;

  /**
   * 
   * @param UserRolesTrans $UserRoles_SaveAndGetResult
   * @access public
   */
  public function __construct($UserRoles_SaveAndGetResult)
  {
    $this->UserRoles_SaveAndGetResult = $UserRoles_SaveAndGetResult;
  }

}

}
