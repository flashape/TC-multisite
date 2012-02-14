<?php

if (!class_exists("Warehouses_Exists", false)) 
{
class Warehouses_Exists
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
