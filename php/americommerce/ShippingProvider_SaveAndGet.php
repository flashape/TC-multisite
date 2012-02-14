<?php

if (!class_exists("ShippingProvider_SaveAndGet", false)) 
{
class ShippingProvider_SaveAndGet
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
