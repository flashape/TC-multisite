<?php

if (!class_exists("StoreCardType_SaveResponse", false)) 
{
class StoreCardType_SaveResponse
{

  /**
   * 
   * @var boolean $StoreCardType_SaveResult
   * @access public
   */
  public $StoreCardType_SaveResult;

  /**
   * 
   * @param boolean $StoreCardType_SaveResult
   * @access public
   */
  public function __construct($StoreCardType_SaveResult)
  {
    $this->StoreCardType_SaveResult = $StoreCardType_SaveResult;
  }

}

}
