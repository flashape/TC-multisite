<?php

if (!class_exists("Warehouses_GetByKey", false)) 
{
class Warehouses_GetByKey
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
