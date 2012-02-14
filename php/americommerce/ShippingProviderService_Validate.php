<?php

if (!class_exists("ShippingProviderService_Validate", false)) 
{
class ShippingProviderService_Validate
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
