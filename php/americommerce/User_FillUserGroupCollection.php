<?php

if (!class_exists("User_FillUserGroupCollection", false)) 
{
class User_FillUserGroupCollection
{

  /**
   * 
   * @var UserTrans $poUserTrans
   * @access public
   */
  public $poUserTrans;

  /**
   * 
   * @param UserTrans $poUserTrans
   * @access public
   */
  public function __construct($poUserTrans)
  {
    $this->poUserTrans = $poUserTrans;
  }

}

}
