<?php

if (!class_exists("ShippingProvider_DeleteResponse", false)) 
{
class ShippingProvider_DeleteResponse
{

  /**
   * 
   * @var boolean $ShippingProvider_DeleteResult
   * @access public
   */
  public $ShippingProvider_DeleteResult;

  /**
   * 
   * @param boolean $ShippingProvider_DeleteResult
   * @access public
   */
  public function __construct($ShippingProvider_DeleteResult)
  {
    $this->ShippingProvider_DeleteResult = $ShippingProvider_DeleteResult;
  }

}

}
