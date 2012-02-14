<?php

if (!class_exists("UserGroup_Save", false)) 
{
class UserGroup_Save
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
