<?php

if (!class_exists("EmailLog_GetByKeyResponse", false)) 
{
class EmailLog_GetByKeyResponse
{

  /**
   * 
   * @var EmailLogTrans $EmailLog_GetByKeyResult
   * @access public
   */
  public $EmailLog_GetByKeyResult;

  /**
   * 
   * @param EmailLogTrans $EmailLog_GetByKeyResult
   * @access public
   */
  public function __construct($EmailLog_GetByKeyResult)
  {
    $this->EmailLog_GetByKeyResult = $EmailLog_GetByKeyResult;
  }

}

}
