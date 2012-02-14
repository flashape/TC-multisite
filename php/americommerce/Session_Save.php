<?php

if (!class_exists("Session_Save", false)) 
{
class Session_Save
{

  /**
   * 
   * @var SessionTrans $poSessionTrans
   * @access public
   */
  public $poSessionTrans;

  /**
   * 
   * @param SessionTrans $poSessionTrans
   * @access public
   */
  public function __construct($poSessionTrans)
  {
    $this->poSessionTrans = $poSessionTrans;
  }

}

}
