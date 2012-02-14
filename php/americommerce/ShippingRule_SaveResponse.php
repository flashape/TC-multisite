<?php

if (!class_exists("ShippingRule_SaveResponse", false)) 
{
class ShippingRule_SaveResponse
{

  /**
   * 
   * @var boolean $ShippingRule_SaveResult
   * @access public
   */
  public $ShippingRule_SaveResult;

  /**
   * 
   * @param boolean $ShippingRule_SaveResult
   * @access public
   */
  public function __construct($ShippingRule_SaveResult)
  {
    $this->ShippingRule_SaveResult = $ShippingRule_SaveResult;
  }

}

}
