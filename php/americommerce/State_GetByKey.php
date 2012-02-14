<?php

if (!class_exists("State_GetByKey", false)) 
{
class State_GetByKey
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
