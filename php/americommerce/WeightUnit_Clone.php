<?php

if (!class_exists("WeightUnit_Clone", false)) 
{
class WeightUnit_Clone
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
