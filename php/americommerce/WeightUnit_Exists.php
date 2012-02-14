<?php

if (!class_exists("WeightUnit_Exists", false)) 
{
class WeightUnit_Exists
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
