<?php

if (!class_exists("UserGroup_SaveResponse", false)) 
{
class UserGroup_SaveResponse
{

  /**
   * 
   * @var boolean $UserGroup_SaveResult
   * @access public
   */
  public $UserGroup_SaveResult;

  /**
   * 
   * @param boolean $UserGroup_SaveResult
   * @access public
   */
  public function __construct($UserGroup_SaveResult)
  {
    $this->UserGroup_SaveResult = $UserGroup_SaveResult;
  }

}

}
