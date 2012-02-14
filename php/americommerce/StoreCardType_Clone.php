<?php

if (!class_exists("StoreCardType_Clone", false)) 
{
class StoreCardType_Clone
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
