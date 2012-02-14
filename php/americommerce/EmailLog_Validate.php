<?php

if (!class_exists("EmailLog_Validate", false)) 
{
class EmailLog_Validate
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
