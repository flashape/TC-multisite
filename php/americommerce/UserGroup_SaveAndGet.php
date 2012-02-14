<?php

if (!class_exists("UserGroup_SaveAndGet", false)) 
{
class UserGroup_SaveAndGet
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
