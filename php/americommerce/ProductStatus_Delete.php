<?php

if (!class_exists("ProductStatus_Delete", false)) 
{
class ProductStatus_Delete
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
