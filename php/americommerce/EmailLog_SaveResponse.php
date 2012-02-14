<?php

if (!class_exists("EmailLog_SaveResponse", false)) 
{
class EmailLog_SaveResponse
{

  /**
   * 
   * @var boolean $EmailLog_SaveResult
   * @access public
   */
  public $EmailLog_SaveResult;

  /**
   * 
   * @param boolean $EmailLog_SaveResult
   * @access public
   */
  public function __construct($EmailLog_SaveResult)
  {
    $this->EmailLog_SaveResult = $EmailLog_SaveResult;
  }

}

}
