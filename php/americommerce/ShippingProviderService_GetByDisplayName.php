<?php

if (!class_exists("ShippingProviderService_GetByDisplayName", false)) 
{
class ShippingProviderService_GetByDisplayName
{

  /**
   * 
   * @var string $psProviderDisplayName
   * @access public
   */
  public $psProviderDisplayName;

  /**
   * 
   * @param string $psProviderDisplayName
   * @access public
   */
  public function __construct($psProviderDisplayName)
  {
    $this->psProviderDisplayName = $psProviderDisplayName;
  }

}

}
