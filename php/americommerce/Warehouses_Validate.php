<?php

if (!class_exists("Warehouses_Validate", false)) 
{
class Warehouses_Validate
{

  /**
   * 
   * @var WarehousesTrans $poWarehousesTrans
   * @access public
   */
  public $poWarehousesTrans;

  /**
   * 
   * @param WarehousesTrans $poWarehousesTrans
   * @access public
   */
  public function __construct($poWarehousesTrans)
  {
    $this->poWarehousesTrans = $poWarehousesTrans;
  }

}

}
