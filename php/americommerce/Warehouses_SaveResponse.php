<?php

if (!class_exists("Warehouses_SaveResponse", false)) 
{
class Warehouses_SaveResponse
{

  /**
   * 
   * @var boolean $Warehouses_SaveResult
   * @access public
   */
  public $Warehouses_SaveResult;

  /**
   * 
   * @param boolean $Warehouses_SaveResult
   * @access public
   */
  public function __construct($Warehouses_SaveResult)
  {
    $this->Warehouses_SaveResult = $Warehouses_SaveResult;
  }

}

}
