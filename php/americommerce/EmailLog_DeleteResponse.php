<?php

if (!class_exists("EmailLog_DeleteResponse", false)) 
{
class EmailLog_DeleteResponse
{

  /**
   * 
   * @var boolean $EmailLog_DeleteResult
   * @access public
   */
  public $EmailLog_DeleteResult;

  /**
   * 
   * @param boolean $EmailLog_DeleteResult
   * @access public
   */
  public function __construct($EmailLog_DeleteResult)
  {
    $this->EmailLog_DeleteResult = $EmailLog_DeleteResult;
  }

}

}
