<?php

if (!class_exists("User_ValidateResponse", false)) 
{
class User_ValidateResponse
{

  /**
   * 
   * @var string $User_ValidateResult
   * @access public
   */
  public $User_ValidateResult;

  /**
   * 
   * @param string $User_ValidateResult
   * @access public
   */
  public function __construct($User_ValidateResult)
  {
    $this->User_ValidateResult = $User_ValidateResult;
  }

}

}
