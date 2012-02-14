<?php

if (!class_exists("User_SaveResponse", false)) 
{
class User_SaveResponse
{

  /**
   * 
   * @var boolean $User_SaveResult
   * @access public
   */
  public $User_SaveResult;

  /**
   * 
   * @param boolean $User_SaveResult
   * @access public
   */
  public function __construct($User_SaveResult)
  {
    $this->User_SaveResult = $User_SaveResult;
  }

}

}
