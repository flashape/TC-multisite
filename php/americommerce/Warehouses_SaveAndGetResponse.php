<?php

if (!class_exists("Warehouses_SaveAndGetResponse", false)) 
{
class Warehouses_SaveAndGetResponse
{

  /**
   * 
   * @var WarehousesTrans $Warehouses_SaveAndGetResult
   * @access public
   */
  public $Warehouses_SaveAndGetResult;

  /**
   * 
   * @param WarehousesTrans $Warehouses_SaveAndGetResult
   * @access public
   */
  public function __construct($Warehouses_SaveAndGetResult)
  {
    $this->Warehouses_SaveAndGetResult = $Warehouses_SaveAndGetResult;
  }

}

}
