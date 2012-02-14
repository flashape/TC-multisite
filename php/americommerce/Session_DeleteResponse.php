<?php

if (!class_exists("Session_DeleteResponse", false)) 
{
class Session_DeleteResponse
{

  /**
   * 
   * @var boolean $Session_DeleteResult
   * @access public
   */
  public $Session_DeleteResult;

  /**
   * 
   * @param boolean $Session_DeleteResult
   * @access public
   */
  public function __construct($Session_DeleteResult)
  {
    $this->Session_DeleteResult = $Session_DeleteResult;
  }

}

}
