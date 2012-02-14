<?php

if (!class_exists("ProductStatus_GetByKey", false)) 
{
class ProductStatus_GetByKey
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
