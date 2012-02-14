<?php

if (!class_exists("StoreCardType_GetByKey", false)) 
{
class StoreCardType_GetByKey
{

  /**
   * 
   * @var int $piStoreCardTypeID
   * @access public
   */
  public $piStoreCardTypeID;

  /**
   * 
   * @param int $piStoreCardTypeID
   * @access public
   */
  public function __construct($piStoreCardTypeID)
  {
    $this->piStoreCardTypeID = $piStoreCardTypeID;
  }

}

}
