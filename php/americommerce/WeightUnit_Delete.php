<?php

if (!class_exists("WeightUnit_Delete", false)) 
{
class WeightUnit_Delete
{

  /**
   * 
   * @var int $piweightUnitID
   * @access public
   */
  public $piweightUnitID;

  /**
   * 
   * @param int $piweightUnitID
   * @access public
   */
  public function __construct($piweightUnitID)
  {
    $this->piweightUnitID = $piweightUnitID;
  }

}

}
