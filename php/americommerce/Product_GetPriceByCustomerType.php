<?php

if (!class_exists("Product_GetPriceByCustomerType", false)) 
{
class Product_GetPriceByCustomerType
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
   * @var int $piCustomerTypeID
   * @access public
   */
  public $piCustomerTypeID;

  /**
   * 
   * @param int $piItemID
   * @param int $piQuantity
   * @param int $piCustomerTypeID
   * @access public
   */
  public function __construct($piItemID, $piQuantity, $piCustomerTypeID)
  {
    $this->piItemID = $piItemID;
    $this->piQuantity = $piQuantity;
    $this->piCustomerTypeID = $piCustomerTypeID;
  }

}

}
