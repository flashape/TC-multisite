<?php

if (!class_exists("UserRoles_Save", false)) 
{
class UserRoles_Save
{

  /**
   * 
   * @var UserRolesTrans $poUserRolesTrans
   * @access public
   */
  public $poUserRolesTrans;

  /**
   * 
   * @param UserRolesTrans $poUserRolesTrans
   * @access public
   */
  public function __construct($poUserRolesTrans)
  {
    $this->poUserRolesTrans = $poUserRolesTrans;
  }

}

}
