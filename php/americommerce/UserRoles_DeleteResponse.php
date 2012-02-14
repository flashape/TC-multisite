<?php

if (!class_exists("UserRoles_DeleteResponse", false)) 
{
class UserRoles_DeleteResponse
{

  /**
   * 
   * @var boolean $UserRoles_DeleteResult
   * @access public
   */
  public $UserRoles_DeleteResult;

  /**
   * 
   * @param boolean $UserRoles_DeleteResult
   * @access public
   */
  public function __construct($UserRoles_DeleteResult)
  {
    $this->UserRoles_DeleteResult = $UserRoles_DeleteResult;
  }

}

}
