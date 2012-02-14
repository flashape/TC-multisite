<?php

if (!class_exists("Session_SaveAndGetResponse", false)) 
{
class Session_SaveAndGetResponse
{

  /**
   * 
   * @var SessionTrans $Session_SaveAndGetResult
   * @access public
   */
  public $Session_SaveAndGetResult;

  /**
   * 
   * @param SessionTrans $Session_SaveAndGetResult
   * @access public
   */
  public function __construct($Session_SaveAndGetResult)
  {
    $this->Session_SaveAndGetResult = $Session_SaveAndGetResult;
  }

}

}
