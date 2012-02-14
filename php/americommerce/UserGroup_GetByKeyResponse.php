<?php

if (!class_exists("UserGroup_GetByKeyResponse", false)) 
{
class UserGroup_GetByKeyResponse
{

  /**
   * 
   * @var UserGroupTrans $UserGroup_GetByKeyResult
   * @access public
   */
  public $UserGroup_GetByKeyResult;

  /**
   * 
   * @param UserGroupTrans $UserGroup_GetByKeyResult
   * @access public
   */
  public function __construct($UserGroup_GetByKeyResult)
  {
    $this->UserGroup_GetByKeyResult = $UserGroup_GetByKeyResult;
  }

}

}
