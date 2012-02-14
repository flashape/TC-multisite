<?php

if (!class_exists("User_Validate", false)) 
{
class User_Validate
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
