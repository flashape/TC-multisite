<?php

if (!class_exists("StoreCardType_CloneResponse", false)) 
{
class StoreCardType_CloneResponse
{

  /**
   * 
   * @var StoreCardTypeTrans $StoreCardType_CloneResult
   * @access public
   */
  public $StoreCardType_CloneResult;

  /**
   * 
   * @param StoreCardTypeTrans $StoreCardType_CloneResult
   * @access public
   */
  public function __construct($StoreCardType_CloneResult)
  {
    $this->StoreCardType_CloneResult = $StoreCardType_CloneResult;
  }

}

}
