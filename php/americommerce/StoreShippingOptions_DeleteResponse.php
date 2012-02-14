<?php

if (!class_exists("StoreShippingOptions_DeleteResponse", false)) 
{
class StoreShippingOptions_DeleteResponse
{

  /**
   * 
   * @var boolean $StoreShippingOptions_DeleteResult
   * @access public
   */
  public $StoreShippingOptions_DeleteResult;

  /**
   * 
   * @param boolean $StoreShippingOptions_DeleteResult
   * @access public
   */
  public function __construct($StoreShippingOptions_DeleteResult)
  {
    $this->StoreShippingOptions_DeleteResult = $StoreShippingOptions_DeleteResult;
  }

}

}
