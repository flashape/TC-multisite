<?php

if (!class_exists("StoreCardType_GetByKeyResponse", false)) 
{
class StoreCardType_GetByKeyResponse
{

  /**
   * 
   * @var StoreCardTypeTrans $StoreCardType_GetByKeyResult
   * @access public
   */
  public $StoreCardType_GetByKeyResult;

  /**
   * 
   * @param StoreCardTypeTrans $StoreCardType_GetByKeyResult
   * @access public
   */
  public function __construct($StoreCardType_GetByKeyResult)
  {
    $this->StoreCardType_GetByKeyResult = $StoreCardType_GetByKeyResult;
  }

}

}
