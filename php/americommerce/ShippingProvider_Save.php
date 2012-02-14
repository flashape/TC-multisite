<?php

if (!class_exists("ShippingProvider_Save", false)) 
{
class ShippingProvider_Save
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
