<?php

if (!class_exists("User_SaveAndGetResponse", false)) 
{
class User_SaveAndGetResponse
{

  /**
   * 
   * @var UserTrans $User_SaveAndGetResult
   * @access public
   */
  public $User_SaveAndGetResult;

  /**
   * 
   * @param UserTrans $User_SaveAndGetResult
   * @access public
   */
  public function __construct($User_SaveAndGetResult)
  {
    $this->User_SaveAndGetResult = $User_SaveAndGetResult;
  }

}

}
