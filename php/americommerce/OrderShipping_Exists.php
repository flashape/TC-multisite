<?php

if (!class_exists("OrderShipping_Exists", false)) 
{
class OrderShipping_Exists
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
