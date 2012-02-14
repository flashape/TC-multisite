<?php

if (!class_exists("UserGroupPermission_DeleteResponse", false)) 
{
class UserGroupPermission_DeleteResponse
{

  /**
   * 
   * @var boolean $UserGroupPermission_DeleteResult
   * @access public
   */
  public $UserGroupPermission_DeleteResult;

  /**
   * 
   * @param boolean $UserGroupPermission_DeleteResult
   * @access public
   */
  public function __construct($UserGroupPermission_DeleteResult)
  {
    $this->UserGroupPermission_DeleteResult = $UserGroupPermission_DeleteResult;
  }

}

}
