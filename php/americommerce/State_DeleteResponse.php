<?php

if (!class_exists("State_DeleteResponse", false)) 
{
class State_DeleteResponse
{

  /**
   * 
   * @var boolean $State_DeleteResult
   * @access public
   */
  public $State_DeleteResult;

  /**
   * 
   * @param boolean $State_DeleteResult
   * @access public
   */
  public function __construct($State_DeleteResult)
  {
    $this->State_DeleteResult = $State_DeleteResult;
  }

}

}
