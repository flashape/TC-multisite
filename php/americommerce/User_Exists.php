<?php

if (!class_exists("User_Exists", false)) 
{
class User_Exists
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
