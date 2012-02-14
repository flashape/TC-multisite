<?php

if (!class_exists("UserRoles_ExistsResponse", false)) 
{
class UserRoles_ExistsResponse
{

  /**
   * 
   * @var boolean $UserRoles_ExistsResult
   * @access public
   */
  public $UserRoles_ExistsResult;

  /**
   * 
   * @param boolean $UserRoles_ExistsResult
   * @access public
   */
  public function __construct($UserRoles_ExistsResult)
  {
    $this->UserRoles_ExistsResult = $UserRoles_ExistsResult;
  }

}

}
