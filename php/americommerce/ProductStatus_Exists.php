<?php

if (!class_exists("ProductStatus_Exists", false)) 
{
class ProductStatus_Exists
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
