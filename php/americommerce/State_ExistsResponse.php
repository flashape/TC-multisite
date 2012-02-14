<?php

if (!class_exists("State_ExistsResponse", false)) 
{
class State_ExistsResponse
{

  /**
   * 
   * @var boolean $State_ExistsResult
   * @access public
   */
  public $State_ExistsResult;

  /**
   * 
   * @param boolean $State_ExistsResult
   * @access public
   */
  public function __construct($State_ExistsResult)
  {
    $this->State_ExistsResult = $State_ExistsResult;
  }

}

}
