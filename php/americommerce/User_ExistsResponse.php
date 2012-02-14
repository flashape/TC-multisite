<?php

if (!class_exists("User_ExistsResponse", false)) 
{
class User_ExistsResponse
{

  /**
   * 
   * @var boolean $User_ExistsResult
   * @access public
   */
  public $User_ExistsResult;

  /**
   * 
   * @param boolean $User_ExistsResult
   * @access public
   */
  public function __construct($User_ExistsResult)
  {
    $this->User_ExistsResult = $User_ExistsResult;
  }

}

}
