<?php

if (!class_exists("Product_GetByItemNumber", false)) 
{
class Product_GetByItemNumber
{

  /**
   * 
   * @var string $psItemNumber
   * @access public
   */
  public $psItemNumber;

  /**
   * 
   * @param string $psItemNumber
   * @access public
   */
  public function __construct($psItemNumber)
  {
    $this->psItemNumber = $psItemNumber;
  }

}

}
