<?php

if (!class_exists("UserRoles_ValidateResponse", false)) 
{
class UserRoles_ValidateResponse
{

  /**
   * 
   * @var string $UserRoles_ValidateResult
   * @access public
   */
  public $UserRoles_ValidateResult;

  /**
   * 
   * @param string $UserRoles_ValidateResult
   * @access public
   */
  public function __construct($UserRoles_ValidateResult)
  {
    $this->UserRoles_ValidateResult = $UserRoles_ValidateResult;
  }

}

}
