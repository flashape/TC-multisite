<?php

if (!class_exists("Warehouses_Delete", false)) 
{
class Warehouses_Delete
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
