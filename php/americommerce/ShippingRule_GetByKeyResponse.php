<?php

if (!class_exists("ShippingRule_GetByKeyResponse", false)) 
{
class ShippingRule_GetByKeyResponse
{

  /**
   * 
   * @var ShippingRuleTrans $ShippingRule_GetByKeyResult
   * @access public
   */
  public $ShippingRule_GetByKeyResult;

  /**
   * 
   * @param ShippingRuleTrans $ShippingRule_GetByKeyResult
   * @access public
   */
  public function __construct($ShippingRule_GetByKeyResult)
  {
    $this->ShippingRule_GetByKeyResult = $ShippingRule_GetByKeyResult;
  }

}

}
