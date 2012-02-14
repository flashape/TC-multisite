<?php

if (!class_exists("User_DeleteResponse", false)) 
{
class User_DeleteResponse
{

  /**
   * 
   * @var boolean $User_DeleteResult
   * @access public
   */
  public $User_DeleteResult;

  /**
   * 
   * @param boolean $User_DeleteResult
   * @access public
   */
  public function __construct($User_DeleteResult)
  {
    $this->User_DeleteResult = $User_DeleteResult;
  }

}

}
