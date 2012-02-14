<?php

if (!class_exists("User_Clone", false)) 
{
class User_Clone
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
