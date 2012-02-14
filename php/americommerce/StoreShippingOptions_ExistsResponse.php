<?php

if (!class_exists("StoreShippingOptions_ExistsResponse", false)) 
{
class StoreShippingOptions_ExistsResponse
{

  /**
   * 
   * @var boolean $StoreShippingOptions_ExistsResult
   * @access public
   */
  public $StoreShippingOptions_ExistsResult;

  /**
   * 
   * @param boolean $StoreShippingOptions_ExistsResult
   * @access public
   */
  public function __construct($StoreShippingOptions_ExistsResult)
  {
    $this->StoreShippingOptions_ExistsResult = $StoreShippingOptions_ExistsResult;
  }

}

}
