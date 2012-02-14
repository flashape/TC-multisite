<?php

if (!class_exists("StoreCardType_Validate", false)) 
{
class StoreCardType_Validate
{

  /**
   * 
   * @var StoreCardTypeTrans $poStoreCardTypeTrans
   * @access public
   */
  public $poStoreCardTypeTrans;

  /**
   * 
   * @param StoreCardTypeTrans $poStoreCardTypeTrans
   * @access public
   */
  public function __construct($poStoreCardTypeTrans)
  {
    $this->poStoreCardTypeTrans = $poStoreCardTypeTrans;
  }

}

}
