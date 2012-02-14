<?php

if (!class_exists("Warehouses_ExistsResponse", false)) 
{
class Warehouses_ExistsResponse
{

  /**
   * 
   * @var boolean $Warehouses_ExistsResult
   * @access public
   */
  public $Warehouses_ExistsResult;

  /**
   * 
   * @param boolean $Warehouses_ExistsResult
   * @access public
   */
  public function __construct($Warehouses_ExistsResult)
  {
    $this->Warehouses_ExistsResult = $Warehouses_ExistsResult;
  }

}

}
