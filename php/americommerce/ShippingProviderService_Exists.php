<?php

if (!class_exists("ShippingProviderService_Exists", false)) 
{
class ShippingProviderService_Exists
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
