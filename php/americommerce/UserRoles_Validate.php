<?php

if (!class_exists("UserRoles_Validate", false)) 
{
class UserRoles_Validate
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
