<?php

if (!class_exists("OrderShipping_Delete", false)) 
{
class OrderShipping_Delete
{

  /**
   * 
   * @var int $piOrderShippingID
   * @access public
   */
  public $piOrderShippingID;

  /**
   * 
   * @param int $piOrderShippingID
   * @access public
   */
  public function __construct($piOrderShippingID)
  {
    $this->piOrderShippingID = $piOrderShippingID;
  }

}

}
