<?php

if (!class_exists("OrderExtendedShipping_GetByKey", false)) 
{
class OrderExtendedShipping_GetByKey
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
