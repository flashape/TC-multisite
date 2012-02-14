<?php

if (!class_exists("User_Delete", false)) 
{
class User_Delete
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
