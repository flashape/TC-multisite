<?php

if (!class_exists("StoreShippingOptions_Validate", false)) 
{
class StoreShippingOptions_Validate
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
