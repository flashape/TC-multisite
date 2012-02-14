<?php

if (!class_exists("StoreCardType_SaveAndGet", false)) 
{
class StoreCardType_SaveAndGet
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
