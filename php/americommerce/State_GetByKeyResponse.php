<?php

if (!class_exists("State_GetByKeyResponse", false)) 
{
class State_GetByKeyResponse
{

  /**
   * 
   * @var StateTrans $State_GetByKeyResult
   * @access public
   */
  public $State_GetByKeyResult;

  /**
   * 
   * @param StateTrans $State_GetByKeyResult
   * @access public
   */
  public function __construct($State_GetByKeyResult)
  {
    $this->State_GetByKeyResult = $State_GetByKeyResult;
  }

}

}
