<?php

if (!class_exists("StoreShippingOptions_SaveAndGetResponse", false)) 
{
class StoreShippingOptions_SaveAndGetResponse
{

  /**
   * 
   * @var StoreShippingOptionsTrans $StoreShippingOptions_SaveAndGetResult
   * @access public
   */
  public $StoreShippingOptions_SaveAndGetResult;

  /**
   * 
   * @param StoreShippingOptionsTrans $StoreShippingOptions_SaveAndGetResult
   * @access public
   */
  public function __construct($StoreShippingOptions_SaveAndGetResult)
  {
    $this->StoreShippingOptions_SaveAndGetResult = $StoreShippingOptions_SaveAndGetResult;
  }

}

}
