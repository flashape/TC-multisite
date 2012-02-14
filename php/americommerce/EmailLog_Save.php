<?php

if (!class_exists("EmailLog_Save", false)) 
{
class EmailLog_Save
{

  /**
   * 
   * @var EmailLogTrans $poEmailLogTrans
   * @access public
   */
  public $poEmailLogTrans;

  /**
   * 
   * @param EmailLogTrans $poEmailLogTrans
   * @access public
   */
  public function __construct($poEmailLogTrans)
  {
    $this->poEmailLogTrans = $poEmailLogTrans;
  }

}

}
