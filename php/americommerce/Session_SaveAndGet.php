<?php

if (!class_exists("Session_SaveAndGet", false)) 
{
class Session_SaveAndGet
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
