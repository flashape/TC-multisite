<?php

if (!class_exists("Store_SaveAndGetResponse", false)) 
{
class Store_SaveAndGetResponse
{

  /**
   * 
   * @var StoreTrans $Store_SaveAndGetResult
   * @access public
   */
  public $Store_SaveAndGetResult;

  /**
   * 
   * @param StoreTrans $Store_SaveAndGetResult
   * @access public
   */
  public function __construct($Store_SaveAndGetResult)
  {
    $this->Store_SaveAndGetResult = $Store_SaveAndGetResult;
  }

}

}
