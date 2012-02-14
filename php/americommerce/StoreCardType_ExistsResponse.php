<?php

if (!class_exists("StoreCardType_ExistsResponse", false)) 
{
class StoreCardType_ExistsResponse
{

  /**
   * 
   * @var boolean $StoreCardType_ExistsResult
   * @access public
   */
  public $StoreCardType_ExistsResult;

  /**
   * 
   * @param boolean $StoreCardType_ExistsResult
   * @access public
   */
  public function __construct($StoreCardType_ExistsResult)
  {
    $this->StoreCardType_ExistsResult = $StoreCardType_ExistsResult;
  }

}

}
