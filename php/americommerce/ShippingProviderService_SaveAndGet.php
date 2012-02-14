<?php

if (!class_exists("ShippingProviderService_SaveAndGet", false)) 
{
class ShippingProviderService_SaveAndGet
{

  /**
   * 
   * @var ShippingProviderServiceTrans $poShippingProviderServiceTrans
   * @access public
   */
  public $poShippingProviderServiceTrans;

  /**
   * 
   * @param ShippingProviderServiceTrans $poShippingProviderServiceTrans
   * @access public
   */
  public function __construct($poShippingProviderServiceTrans)
  {
    $this->poShippingProviderServiceTrans = $poShippingProviderServiceTrans;
  }

}

}
