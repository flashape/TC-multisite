<?php

if (!class_exists("EmailLog_SaveAndGet", false)) 
{
class EmailLog_SaveAndGet
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
