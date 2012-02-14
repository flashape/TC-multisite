<?php

if (!class_exists("Warehouses_SaveAndGet", false)) 
{
class Warehouses_SaveAndGet
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
