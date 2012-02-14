<?php

if (!class_exists("ShippingProviderService_Clone", false)) 
{
class ShippingProviderService_Clone
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
