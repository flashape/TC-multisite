<?php

if (!class_exists("User_CloneResponse", false)) 
{
class User_CloneResponse
{

  /**
   * 
   * @var UserTrans $User_CloneResult
   * @access public
   */
  public $User_CloneResult;

  /**
   * 
   * @param UserTrans $User_CloneResult
   * @access public
   */
  public function __construct($User_CloneResult)
  {
    $this->User_CloneResult = $User_CloneResult;
  }

}

}
