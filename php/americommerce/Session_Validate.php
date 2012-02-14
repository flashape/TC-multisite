<?php

if (!class_exists("Session_Validate", false)) 
{
class Session_Validate
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
