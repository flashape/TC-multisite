<?php

if (!class_exists("UserGroup_DeleteResponse", false)) 
{
class UserGroup_DeleteResponse
{

  /**
   * 
   * @var boolean $UserGroup_DeleteResult
   * @access public
   */
  public $UserGroup_DeleteResult;

  /**
   * 
   * @param boolean $UserGroup_DeleteResult
   * @access public
   */
  public function __construct($UserGroup_DeleteResult)
  {
    $this->UserGroup_DeleteResult = $UserGroup_DeleteResult;
  }

}

}
