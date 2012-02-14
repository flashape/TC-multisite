<?php

if (!class_exists("ShippingProvider_GetByName", false)) 
{
class ShippingProvider_GetByName
{

  /**
   * 
   * @var string $psProviderName
   * @access public
   */
  public $psProviderName;

  /**
   * 
   * @param string $psProviderName
   * @access public
   */
  public function __construct($psProviderName)
  {
    $this->psProviderName = $psProviderName;
  }

}

}
