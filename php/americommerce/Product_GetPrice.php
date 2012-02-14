<?php

if (!class_exists("Product_GetPrice", false)) 
{
class Product_GetPrice
{

  /**
   * 
   * @var int $piItemID
   * @access public
   */
  public $piItemID;

  /**
   * 
   * @var int $piQuantity
   * @access public
   */
  public $piQuantity;

  /**
   * 
   * @param int $piItemID
   * @param int $piQuantity
   * @access public
   */
  public function __construct($piItemID, $piQuantity)
  {
    $this->piItemID = $piItemID;
    $this->piQuantity = $piQuantity;
  }

}

}
