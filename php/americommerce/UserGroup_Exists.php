<?php

if (!class_exists("UserGroup_Exists", false)) 
{
class UserGroup_Exists
{

  /**
   * 
   * @var int $piuserGroupID
   * @access public
   */
  public $piuserGroupID;

  /**
   * 
   * @param int $piuserGroupID
   * @access public
   */
  public function __construct($piuserGroupID)
  {
    $this->piuserGroupID = $piuserGroupID;
  }

}

}
