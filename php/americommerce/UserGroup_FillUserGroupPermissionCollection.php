<?php

if (!class_exists("UserGroup_FillUserGroupPermissionCollection", false)) 
{
class UserGroup_FillUserGroupPermissionCollection
{

  /**
   * 
   * @var UserGroupTrans $poUserGroupTrans
   * @access public
   */
  public $poUserGroupTrans;

  /**
   * 
   * @param UserGroupTrans $poUserGroupTrans
   * @access public
   */
  public function __construct($poUserGroupTrans)
  {
    $this->poUserGroupTrans = $poUserGroupTrans;
  }

}

}
