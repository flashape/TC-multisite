<?php

if (!class_exists("User_SaveAndGet", false)) 
{
class User_SaveAndGet
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
