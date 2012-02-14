<?php

if (!class_exists("State_CloneResponse", false)) 
{
class State_CloneResponse
{

  /**
   * 
   * @var StateTrans $State_CloneResult
   * @access public
   */
  public $State_CloneResult;

  /**
   * 
   * @param StateTrans $State_CloneResult
   * @access public
   */
  public function __construct($State_CloneResult)
  {
    $this->State_CloneResult = $State_CloneResult;
  }

}

}
