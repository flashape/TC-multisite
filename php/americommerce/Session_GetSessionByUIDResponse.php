<?php

if (!class_exists("Session_GetSessionByUIDResponse", false)) 
{
class Session_GetSessionByUIDResponse
{

  /**
   * 
   * @var SessionTrans $Session_GetSessionByUIDResult
   * @access public
   */
  public $Session_GetSessionByUIDResult;

  /**
   * 
   * @param SessionTrans $Session_GetSessionByUIDResult
   * @access public
   */
  public function __construct($Session_GetSessionByUIDResult)
  {
    $this->Session_GetSessionByUIDResult = $Session_GetSessionByUIDResult;
  }

}

}
