<?php

if (!class_exists("UserRoles_SaveResponse", false)) 
{
class UserRoles_SaveResponse
{

  /**
   * 
   * @var boolean $UserRoles_SaveResult
   * @access public
   */
  public $UserRoles_SaveResult;

  /**
   * 
   * @param boolean $UserRoles_SaveResult
   * @access public
   */
  public function __construct($UserRoles_SaveResult)
  {
    $this->UserRoles_SaveResult = $UserRoles_SaveResult;
  }

}

}
