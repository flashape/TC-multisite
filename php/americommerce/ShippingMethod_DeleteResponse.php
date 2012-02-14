<?php

if (!class_exists("ShippingMethod_DeleteResponse", false)) 
{
class ShippingMethod_DeleteResponse
{

  /**
   * 
   * @var boolean $ShippingMethod_DeleteResult
   * @access public
   */
  public $ShippingMethod_DeleteResult;

  /**
   * 
   * @param boolean $ShippingMethod_DeleteResult
   * @access public
   */
  public function __construct($ShippingMethod_DeleteResult)
  {
    $this->ShippingMethod_DeleteResult = $ShippingMethod_DeleteResult;
  }

}

}
