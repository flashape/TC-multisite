<?php

if (!class_exists("Session_SaveResponse", false)) 
{
class Session_SaveResponse
{

  /**
   * 
   * @var boolean $Session_SaveResult
   * @access public
   */
  public $Session_SaveResult;

  /**
   * 
   * @param boolean $Session_SaveResult
   * @access public
   */
  public function __construct($Session_SaveResult)
  {
    $this->Session_SaveResult = $Session_SaveResult;
  }

}

}
