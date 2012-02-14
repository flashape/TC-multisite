<?php

if (!class_exists("ActiveInStore_SaveAndGetResponse", false)) 
{
class ActiveInStore_SaveAndGetResponse
{

  /**
   * 
   * @var ActiveInStoreTrans $ActiveInStore_SaveAndGetResult
   * @access public
   */
  public $ActiveInStore_SaveAndGetResult;

  /**
   * 
   * @param ActiveInStoreTrans $ActiveInStore_SaveAndGetResult
   * @access public
   */
  public function __construct($ActiveInStore_SaveAndGetResult)
  {
    $this->ActiveInStore_SaveAndGetResult = $ActiveInStore_SaveAndGetResult;
  }

}

}
