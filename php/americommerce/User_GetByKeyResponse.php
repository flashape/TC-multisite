<?php

if (!class_exists("User_GetByKeyResponse", false)) 
{
class User_GetByKeyResponse
{

  /**
   * 
   * @var UserTrans $User_GetByKeyResult
   * @access public
   */
  public $User_GetByKeyResult;

  /**
   * 
   * @param UserTrans $User_GetByKeyResult
   * @access public
   */
  public function __construct($User_GetByKeyResult)
  {
    $this->User_GetByKeyResult = $User_GetByKeyResult;
  }

}

}
