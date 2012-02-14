<?php

if (!class_exists("State_GetByNameOrStateCodeResponse", false)) 
{
class State_GetByNameOrStateCodeResponse
{

  /**
   * 
   * @var StateTrans $State_GetByNameOrStateCodeResult
   * @access public
   */
  public $State_GetByNameOrStateCodeResult;

  /**
   * 
   * @param StateTrans $State_GetByNameOrStateCodeResult
   * @access public
   */
  public function __construct($State_GetByNameOrStateCodeResult)
  {
    $this->State_GetByNameOrStateCodeResult = $State_GetByNameOrStateCodeResult;
  }

}

}
