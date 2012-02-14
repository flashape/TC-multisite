<?php

if (!class_exists("State_Exists", false)) 
{
class State_Exists
{

  /**
   * 
   * @var int $pistateID
   * @access public
   */
  public $pistateID;

  /**
   * 
   * @param int $pistateID
   * @access public
   */
  public function __construct($pistateID)
  {
    $this->pistateID = $pistateID;
  }

}

}
