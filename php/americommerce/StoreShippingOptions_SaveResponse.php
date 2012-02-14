<?php

if (!class_exists("StoreShippingOptions_SaveResponse", false)) 
{
class StoreShippingOptions_SaveResponse
{

  /**
   * 
   * @var boolean $StoreShippingOptions_SaveResult
   * @access public
   */
  public $StoreShippingOptions_SaveResult;

  /**
   * 
   * @param boolean $StoreShippingOptions_SaveResult
   * @access public
   */
  public function __construct($StoreShippingOptions_SaveResult)
  {
    $this->StoreShippingOptions_SaveResult = $StoreShippingOptions_SaveResult;
  }

}

}
