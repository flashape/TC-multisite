<?php

if (!class_exists("Warehouses_Save", false)) 
{
class Warehouses_Save
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
