<?php

if (!class_exists("OrderShipping_GetByKey", false)) 
{
class OrderShipping_GetByKey
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
