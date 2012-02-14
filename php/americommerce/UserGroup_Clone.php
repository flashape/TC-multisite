<?php

if (!class_exists("UserGroup_Clone", false)) 
{
class UserGroup_Clone
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
