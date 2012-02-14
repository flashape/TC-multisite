<?php

if (!class_exists("UserGroupPermission_ValidateResponse", false)) 
{
class UserGroupPermission_ValidateResponse
{

  /**
   * 
   * @var string $UserGroupPermission_ValidateResult
   * @access public
   */
  public $UserGroupPermission_ValidateResult;

  /**
   * 
   * @param string $UserGroupPermission_ValidateResult
   * @access public
   */
  public function __construct($UserGroupPermission_ValidateResult)
  {
    $this->UserGroupPermission_ValidateResult = $UserGroupPermission_ValidateResult;
  }

}

}
