<?php

if (!class_exists("StoreCardType_Save", false)) 
{
class StoreCardType_Save
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
