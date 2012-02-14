<?php

if (!class_exists("UserRoles_SaveAndGet", false)) 
{
class UserRoles_SaveAndGet
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
