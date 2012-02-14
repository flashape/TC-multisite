<?php

if (!class_exists("StoreCardType_SaveAndGetResponse", false)) 
{
class StoreCardType_SaveAndGetResponse
{

  /**
   * 
   * @var StoreCardTypeTrans $StoreCardType_SaveAndGetResult
   * @access public
   */
  public $StoreCardType_SaveAndGetResult;

  /**
   * 
   * @param StoreCardTypeTrans $StoreCardType_SaveAndGetResult
   * @access public
   */
  public function __construct($StoreCardType_SaveAndGetResult)
  {
    $this->StoreCardType_SaveAndGetResult = $StoreCardType_SaveAndGetResult;
  }

}

}
