<?php

if (!class_exists("StoreShippingOptions_GetByKeyResponse", false)) 
{
class StoreShippingOptions_GetByKeyResponse
{

  /**
   * 
   * @var StoreShippingOptionsTrans $StoreShippingOptions_GetByKeyResult
   * @access public
   */
  public $StoreShippingOptions_GetByKeyResult;

  /**
   * 
   * @param StoreShippingOptionsTrans $StoreShippingOptions_GetByKeyResult
   * @access public
   */
  public function __construct($StoreShippingOptions_GetByKeyResult)
  {
    $this->StoreShippingOptions_GetByKeyResult = $StoreShippingOptions_GetByKeyResult;
  }

}

}
