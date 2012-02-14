<?php

if (!class_exists("Session_GetByKeyResponse", false)) 
{
class Session_GetByKeyResponse
{

  /**
   * 
   * @var SessionTrans $Session_GetByKeyResult
   * @access public
   */
  public $Session_GetByKeyResult;

  /**
   * 
   * @param SessionTrans $Session_GetByKeyResult
   * @access public
   */
  public function __construct($Session_GetByKeyResult)
  {
    $this->Session_GetByKeyResult = $Session_GetByKeyResult;
  }

}

}
