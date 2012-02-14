<?php

if (!class_exists("User_GetByKey", false)) 
{
class User_GetByKey
{

  /**
   * 
   * @var int $piuserID
   * @access public
   */
  public $piuserID;

  /**
   * 
   * @param int $piuserID
   * @access public
   */
  public function __construct($piuserID)
  {
    $this->piuserID = $piuserID;
  }

}

}
