<?php

if (!class_exists("Warehouses_Clone", false)) 
{
class Warehouses_Clone
{

  /**
   * 
   * @var int $piwarehouseID
   * @access public
   */
  public $piwarehouseID;

  /**
   * 
   * @param int $piwarehouseID
   * @access public
   */
  public function __construct($piwarehouseID)
  {
    $this->piwarehouseID = $piwarehouseID;
  }

}

}
