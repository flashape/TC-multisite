<?php

if (!class_exists("ShippingProvider_GetByCode", false)) 
{
class ShippingProvider_GetByCode
{

  /**
   * 
   * @var string $psProviderCode
   * @access public
   */
  public $psProviderCode;

  /**
   * 
   * @param string $psProviderCode
   * @access public
   */
  public function __construct($psProviderCode)
  {
    $this->psProviderCode = $psProviderCode;
  }

}

}
