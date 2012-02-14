<?php

if (!class_exists("OrderExtendedShipping_Delete", false)) 
{
class OrderExtendedShipping_Delete
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
