<?php

if (!class_exists("ProductStatus_Clone", false)) 
{
class ProductStatus_Clone
{

  /**
   * 
   * @var int $piproductStatusID
   * @access public
   */
  public $piproductStatusID;

  /**
   * 
   * @param int $piproductStatusID
   * @access public
   */
  public function __construct($piproductStatusID)
  {
    $this->piproductStatusID = $piproductStatusID;
  }

}

}
