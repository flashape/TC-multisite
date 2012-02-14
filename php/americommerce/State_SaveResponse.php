<?php

if (!class_exists("State_SaveResponse", false)) 
{
class State_SaveResponse
{

  /**
   * 
   * @var boolean $State_SaveResult
   * @access public
   */
  public $State_SaveResult;

  /**
   * 
   * @param boolean $State_SaveResult
   * @access public
   */
  public function __construct($State_SaveResult)
  {
    $this->State_SaveResult = $State_SaveResult;
  }

}

}
