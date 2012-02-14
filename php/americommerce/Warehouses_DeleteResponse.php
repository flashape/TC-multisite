<?php

if (!class_exists("Warehouses_DeleteResponse", false)) 
{
class Warehouses_DeleteResponse
{

  /**
   * 
   * @var boolean $Warehouses_DeleteResult
   * @access public
   */
  public $Warehouses_DeleteResult;

  /**
   * 
   * @param boolean $Warehouses_DeleteResult
   * @access public
   */
  public function __construct($Warehouses_DeleteResult)
  {
    $this->Warehouses_DeleteResult = $Warehouses_DeleteResult;
  }

}

}
