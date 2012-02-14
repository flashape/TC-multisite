<?php

if (!class_exists("EmailLog_ExistsResponse", false)) 
{
class EmailLog_ExistsResponse
{

  /**
   * 
   * @var boolean $EmailLog_ExistsResult
   * @access public
   */
  public $EmailLog_ExistsResult;

  /**
   * 
   * @param boolean $EmailLog_ExistsResult
   * @access public
   */
  public function __construct($EmailLog_ExistsResult)
  {
    $this->EmailLog_ExistsResult = $EmailLog_ExistsResult;
  }

}

}
