<?php

if (!class_exists("UserGroup_Delete", false)) 
{
class UserGroup_Delete
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
