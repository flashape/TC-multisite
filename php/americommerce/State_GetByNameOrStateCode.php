<?php

if (!class_exists("State_GetByNameOrStateCode", false)) 
{
class State_GetByNameOrStateCode
{

  /**
   * 
   * @var string $psStateNameOrCode
   * @access public
   */
  public $psStateNameOrCode;

  /**
   * 
   * @param string $psStateNameOrCode
   * @access public
   */
  public function __construct($psStateNameOrCode)
  {
    $this->psStateNameOrCode = $psStateNameOrCode;
  }

}

}
