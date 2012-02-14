<?php

if (!class_exists("StoreShippingOptions_Save", false)) 
{
class StoreShippingOptions_Save
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
