<?php

if (!class_exists("StoreCardType_Delete", false)) 
{
class StoreCardType_Delete
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
