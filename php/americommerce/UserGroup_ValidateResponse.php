<?php

if (!class_exists("UserGroup_ValidateResponse", false)) 
{
class UserGroup_ValidateResponse
{

  /**
   * 
   * @var string $UserGroup_ValidateResult
   * @access public
   */
  public $UserGroup_ValidateResult;

  /**
   * 
   * @param string $UserGroup_ValidateResult
   * @access public
   */
  public function __construct($UserGroup_ValidateResult)
  {
    $this->UserGroup_ValidateResult = $UserGroup_ValidateResult;
  }

}

}
