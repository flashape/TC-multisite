<?php

if (!class_exists("ShippingProviderService_GetByCode", false)) 
{
class ShippingProviderService_GetByCode
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
