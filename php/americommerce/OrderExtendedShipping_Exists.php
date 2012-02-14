<?php

if (!class_exists("OrderExtendedShipping_Exists", false)) 
{
class OrderExtendedShipping_Exists
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
