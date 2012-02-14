<?php

if (!class_exists("ShippingProviderService_Delete", false)) 
{
class ShippingProviderService_Delete
{

  /**
   * 
   * @var int $pishippingProviderServiceID
   * @access public
   */
  public $pishippingProviderServiceID;

  /**
   * 
   * @param int $pishippingProviderServiceID
   * @access public
   */
  public function __construct($pishippingProviderServiceID)
  {
    $this->pishippingProviderServiceID = $pishippingProviderServiceID;
  }

}

}
