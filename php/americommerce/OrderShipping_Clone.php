<?php

if (!class_exists("OrderShipping_Clone", false)) 
{
class OrderShipping_Clone
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
