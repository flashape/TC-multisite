<?php

if (!class_exists("ShippingRule_ExistsResponse", false)) 
{
class ShippingRule_ExistsResponse
{

  /**
   * 
   * @var boolean $ShippingRule_ExistsResult
   * @access public
   */
  public $ShippingRule_ExistsResult;

  /**
   * 
   * @param boolean $ShippingRule_ExistsResult
   * @access public
   */
  public function __construct($ShippingRule_ExistsResult)
  {
    $this->ShippingRule_ExistsResult = $ShippingRule_ExistsResult;
  }

}

}
