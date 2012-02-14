<?php

if (!class_exists("Session_StartSessionResponse", false)) 
{
class Session_StartSessionResponse
{

  /**
   * 
   * @var SessionTrans $Session_StartSessionResult
   * @access public
   */
  public $Session_StartSessionResult;

  /**
   * 
   * @param SessionTrans $Session_StartSessionResult
   * @access public
   */
  public function __construct($Session_StartSessionResult)
  {
    $this->Session_StartSessionResult = $Session_StartSessionResult;
  }

}

}
