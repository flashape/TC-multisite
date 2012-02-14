<?php

if (!class_exists("ShippingProviderService_Save", false)) 
{
class ShippingProviderService_Save
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
