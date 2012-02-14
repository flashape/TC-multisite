<?php

if (!class_exists("EmailLog_SaveAndGetResponse", false)) 
{
class EmailLog_SaveAndGetResponse
{

  /**
   * 
   * @var EmailLogTrans $EmailLog_SaveAndGetResult
   * @access public
   */
  public $EmailLog_SaveAndGetResult;

  /**
   * 
   * @param EmailLogTrans $EmailLog_SaveAndGetResult
   * @access public
   */
  public function __construct($EmailLog_SaveAndGetResult)
  {
    $this->EmailLog_SaveAndGetResult = $EmailLog_SaveAndGetResult;
  }

}

}
