<?php

if (!class_exists("UserGroup_CloneResponse", false)) 
{
class UserGroup_CloneResponse
{

  /**
   * 
   * @var UserGroupTrans $UserGroup_CloneResult
   * @access public
   */
  public $UserGroup_CloneResult;

  /**
   * 
   * @param UserGroupTrans $UserGroup_CloneResult
   * @access public
   */
  public function __construct($UserGroup_CloneResult)
  {
    $this->UserGroup_CloneResult = $UserGroup_CloneResult;
  }

}

}
