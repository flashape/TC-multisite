<?php

if (!class_exists("UserGroup_ExistsResponse", false)) 
{
class UserGroup_ExistsResponse
{

  /**
   * 
   * @var boolean $UserGroup_ExistsResult
   * @access public
   */
  public $UserGroup_ExistsResult;

  /**
   * 
   * @param boolean $UserGroup_ExistsResult
   * @access public
   */
  public function __construct($UserGroup_ExistsResult)
  {
    $this->UserGroup_ExistsResult = $UserGroup_ExistsResult;
  }

}

}
