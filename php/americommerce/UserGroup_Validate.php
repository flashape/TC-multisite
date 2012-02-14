<?php

if (!class_exists("UserGroup_Validate", false)) 
{
class UserGroup_Validate
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
