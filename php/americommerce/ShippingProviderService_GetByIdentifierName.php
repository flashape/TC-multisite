<?php

if (!class_exists("ShippingProviderService_GetByIdentifierName", false)) 
{
class ShippingProviderService_GetByIdentifierName
{

  /**
   * 
   * @var string $psProviderIdentifierName
   * @access public
   */
  public $psProviderIdentifierName;

  /**
   * 
   * @param string $psProviderIdentifierName
   * @access public
   */
  public function __construct($psProviderIdentifierName)
  {
    $this->psProviderIdentifierName = $psProviderIdentifierName;
  }

}

}
