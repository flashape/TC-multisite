<?php

if (!class_exists("UserGroup_GetByKey", false)) 
{
class UserGroup_GetByKey
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
