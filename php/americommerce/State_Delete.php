<?php

if (!class_exists("State_Delete", false)) 
{
class State_Delete
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
