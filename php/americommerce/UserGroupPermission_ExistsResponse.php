<?php

if (!class_exists("UserGroupPermission_ExistsResponse", false)) 
{
class UserGroupPermission_ExistsResponse
{

  /**
   * 
   * @var boolean $UserGroupPermission_ExistsResult
   * @access public
   */
  public $UserGroupPermission_ExistsResult;

  /**
   * 
   * @param boolean $UserGroupPermission_ExistsResult
   * @access public
   */
  public function __construct($UserGroupPermission_ExistsResult)
  {
    $this->UserGroupPermission_ExistsResult = $UserGroupPermission_ExistsResult;
  }

}

}
