<?php

if (!class_exists("OrderExtendedShipping_Clone", false)) 
{
class OrderExtendedShipping_Clone
{

  /**
   * 
   * @var int $piOrderExtendedShippingID
   * @access public
   */
  public $piOrderExtendedShippingID;

  /**
   * 
   * @param int $piOrderExtendedShippingID
   * @access public
   */
  public function __construct($piOrderExtendedShippingID)
  {
    $this->piOrderExtendedShippingID = $piOrderExtendedShippingID;
  }

}

}
