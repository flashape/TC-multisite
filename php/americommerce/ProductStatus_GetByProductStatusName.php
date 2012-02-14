<?php

if (!class_exists("ProductStatus_GetByProductStatusName", false)) 
{
class ProductStatus_GetByProductStatusName
{

  /**
   * 
   * @var string $psProductStatusName
   * @access public
   */
  public $psProductStatusName;

  /**
   * 
   * @param string $psProductStatusName
   * @access public
   */
  public function __construct($psProductStatusName)
  {
    $this->psProductStatusName = $psProductStatusName;
  }

}

}
