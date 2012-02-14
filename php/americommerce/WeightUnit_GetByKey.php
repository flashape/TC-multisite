<?php

if (!class_exists("WeightUnit_GetByKey", false)) 
{
class WeightUnit_GetByKey
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
