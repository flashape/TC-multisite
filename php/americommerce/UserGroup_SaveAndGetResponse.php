<?php

if (!class_exists("UserGroup_SaveAndGetResponse", false)) 
{
class UserGroup_SaveAndGetResponse
{

  /**
   * 
   * @var UserGroupTrans $UserGroup_SaveAndGetResult
   * @access public
   */
  public $UserGroup_SaveAndGetResult;

  /**
   * 
   * @param UserGroupTrans $UserGroup_SaveAndGetResult
   * @access public
   */
  public function __construct($UserGroup_SaveAndGetResult)
  {
    $this->UserGroup_SaveAndGetResult = $UserGroup_SaveAndGetResult;
  }

}

}
