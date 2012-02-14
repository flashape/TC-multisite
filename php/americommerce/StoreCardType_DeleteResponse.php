<?php

if (!class_exists("StoreCardType_DeleteResponse", false)) 
{
class StoreCardType_DeleteResponse
{

  /**
   * 
   * @var boolean $StoreCardType_DeleteResult
   * @access public
   */
  public $StoreCardType_DeleteResult;

  /**
   * 
   * @param boolean $StoreCardType_DeleteResult
   * @access public
   */
  public function __construct($StoreCardType_DeleteResult)
  {
    $this->StoreCardType_DeleteResult = $StoreCardType_DeleteResult;
  }

}

}
