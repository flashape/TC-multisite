<?php

if (!class_exists("UserGroupPermission_SaveResponse", false)) 
{
class UserGroupPermission_SaveResponse
{

  /**
   * 
   * @var boolean $UserGroupPermission_SaveResult
   * @access public
   */
  public $UserGroupPermission_SaveResult;

  /**
   * 
   * @param boolean $UserGroupPermission_SaveResult
   * @access public
   */
  public function __construct($UserGroupPermission_SaveResult)
  {
    $this->UserGroupPermission_SaveResult = $UserGroupPermission_SaveResult;
  }

}

}
