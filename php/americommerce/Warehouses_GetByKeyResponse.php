<?php

if (!class_exists("Warehouses_GetByKeyResponse", false)) 
{
class Warehouses_GetByKeyResponse
{

  /**
   * 
   * @var WarehousesTrans $Warehouses_GetByKeyResult
   * @access public
   */
  public $Warehouses_GetByKeyResult;

  /**
   * 
   * @param WarehousesTrans $Warehouses_GetByKeyResult
   * @access public
   */
  public function __construct($Warehouses_GetByKeyResult)
  {
    $this->Warehouses_GetByKeyResult = $Warehouses_GetByKeyResult;
  }

}

}
