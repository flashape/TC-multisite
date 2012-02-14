<?php

if (!class_exists("StoreCardType_Exists", false)) 
{
class StoreCardType_Exists
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
