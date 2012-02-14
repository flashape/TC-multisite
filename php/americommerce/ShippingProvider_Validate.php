<?php

if (!class_exists("ShippingProvider_Validate", false)) 
{
class ShippingProvider_Validate
{

  /**
   * 
   * @var ShippingProviderTrans $poShippingProviderTrans
   * @access public
   */
  public $poShippingProviderTrans;

  /**
   * 
   * @param ShippingProviderTrans $poShippingProviderTrans
   * @access public
   */
  public function __construct($poShippingProviderTrans)
  {
    $this->poShippingProviderTrans = $poShippingProviderTrans;
  }

}

}
