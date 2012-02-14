<?php

if (!class_exists("Session_CloneResponse", false)) 
{
class Session_CloneResponse
{

  /**
   * 
   * @var SessionTrans $Session_CloneResult
   * @access public
   */
  public $Session_CloneResult;

  /**
   * 
   * @param SessionTrans $Session_CloneResult
   * @access public
   */
  public function __construct($Session_CloneResult)
  {
    $this->Session_CloneResult = $Session_CloneResult;
  }

}

}
