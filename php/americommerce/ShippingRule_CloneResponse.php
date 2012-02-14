<?php

if (!class_exists("ShippingRule_CloneResponse", false)) 
{
class ShippingRule_CloneResponse
{

  /**
   * 
   * @var ShippingRuleTrans $ShippingRule_CloneResult
   * @access public
   */
  public $ShippingRule_CloneResult;

  /**
   * 
   * @param ShippingRuleTrans $ShippingRule_CloneResult
   * @access public
   */
  public function __construct($ShippingRule_CloneResult)
  {
    $this->ShippingRule_CloneResult = $ShippingRule_CloneResult;
  }

}

}
