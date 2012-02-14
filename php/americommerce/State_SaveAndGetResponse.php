<?php

if (!class_exists("State_SaveAndGetResponse", false)) 
{
class State_SaveAndGetResponse
{

  /**
   * 
   * @var StateTrans $State_SaveAndGetResult
   * @access public
   */
  public $State_SaveAndGetResult;

  /**
   * 
   * @param StateTrans $State_SaveAndGetResult
   * @access public
   */
  public function __construct($State_SaveAndGetResult)
  {
    $this->State_SaveAndGetResult = $State_SaveAndGetResult;
  }

}

}
