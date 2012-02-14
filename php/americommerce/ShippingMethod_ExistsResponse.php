<?php

if (!class_exists("ShippingMethod_ExistsResponse", false)) 
{
class ShippingMethod_ExistsResponse
{

  /**
   * 
   * @var boolean $ShippingMethod_ExistsResult
   * @access public
   */
  public $ShippingMethod_ExistsResult;

  /**
   * 
   * @param boolean $ShippingMethod_ExistsResult
   * @access public
   */
  public function __construct($ShippingMethod_ExistsResult)
  {
    $this->ShippingMethod_ExistsResult = $ShippingMethod_ExistsResult;
  }

}

}
