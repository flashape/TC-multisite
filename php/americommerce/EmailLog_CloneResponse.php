<?php

if (!class_exists("EmailLog_CloneResponse", false)) 
{
class EmailLog_CloneResponse
{

  /**
   * 
   * @var EmailLogTrans $EmailLog_CloneResult
   * @access public
   */
  public $EmailLog_CloneResult;

  /**
   * 
   * @param EmailLogTrans $EmailLog_CloneResult
   * @access public
   */
  public function __construct($EmailLog_CloneResult)
  {
    $this->EmailLog_CloneResult = $EmailLog_CloneResult;
  }

}

}
