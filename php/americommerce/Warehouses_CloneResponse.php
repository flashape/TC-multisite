<?php

if (!class_exists("Warehouses_CloneResponse", false)) 
{
class Warehouses_CloneResponse
{

  /**
   * 
   * @var WarehousesTrans $Warehouses_CloneResult
   * @access public
   */
  public $Warehouses_CloneResult;

  /**
   * 
   * @param WarehousesTrans $Warehouses_CloneResult
   * @access public
   */
  public function __construct($Warehouses_CloneResult)
  {
    $this->Warehouses_CloneResult = $Warehouses_CloneResult;
  }

}

}
