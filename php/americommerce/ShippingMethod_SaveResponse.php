<?php

if (!class_exists("ShippingMethod_SaveResponse", false)) 
{
class ShippingMethod_SaveResponse
{

  /**
   * 
   * @var boolean $ShippingMethod_SaveResult
   * @access public
   */
  public $ShippingMethod_SaveResult;

  /**
   * 
   * @param boolean $ShippingMethod_SaveResult
   * @access public
   */
  public function __construct($ShippingMethod_SaveResult)
  {
    $this->ShippingMethod_SaveResult = $ShippingMethod_SaveResult;
  }

}

}
