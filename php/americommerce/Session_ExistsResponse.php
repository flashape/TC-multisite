<?php

if (!class_exists("Session_ExistsResponse", false)) 
{
class Session_ExistsResponse
{

  /**
   * 
   * @var boolean $Session_ExistsResult
   * @access public
   */
  public $Session_ExistsResult;

  /**
   * 
   * @param boolean $Session_ExistsResult
   * @access public
   */
  public function __construct($Session_ExistsResult)
  {
    $this->Session_ExistsResult = $Session_ExistsResult;
  }

}

}
