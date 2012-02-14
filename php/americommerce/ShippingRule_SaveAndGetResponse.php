<?php

if (!class_exists("ShippingRule_SaveAndGetResponse", false)) 
{
class ShippingRule_SaveAndGetResponse
{

  /**
   * 
   * @var ShippingRuleTrans $ShippingRule_SaveAndGetResult
   * @access public
   */
  public $ShippingRule_SaveAndGetResult;

  /**
   * 
   * @param ShippingRuleTrans $ShippingRule_SaveAndGetResult
   * @access public
   */
  public function __construct($ShippingRule_SaveAndGetResult)
  {
    $this->ShippingRule_SaveAndGetResult = $ShippingRule_SaveAndGetResult;
  }

}

}
