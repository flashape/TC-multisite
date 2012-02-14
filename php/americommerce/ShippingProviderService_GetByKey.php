<?php

if (!class_exists("ShippingProviderService_GetByKey", false)) 
{
class ShippingProviderService_GetByKey
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
