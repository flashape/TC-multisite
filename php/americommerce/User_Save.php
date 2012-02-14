<?php

if (!class_exists("User_Save", false)) 
{
class User_Save
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
