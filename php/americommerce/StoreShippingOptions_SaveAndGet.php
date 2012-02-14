<?php

if (!class_exists("StoreShippingOptions_SaveAndGet", false)) 
{
class StoreShippingOptions_SaveAndGet
{

  /**
   * 
   * @var StoreShippingOptionsTrans $poStoreShippingOptionsTrans
   * @access public
   */
  public $poStoreShippingOptionsTrans;

  /**
   * 
   * @param StoreShippingOptionsTrans $poStoreShippingOptionsTrans
   * @access public
   */
  public function __construct($poStoreShippingOptionsTrans)
  {
    $this->poStoreShippingOptionsTrans = $poStoreShippingOptionsTrans;
  }

}

}
