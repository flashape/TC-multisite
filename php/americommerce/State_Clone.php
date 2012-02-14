<?php

if (!class_exists("State_Clone", false)) 
{
class State_Clone
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
