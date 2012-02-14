<?php

if (!class_exists("Store_GetCurrentResponse", false)) 
{
class Store_GetCurrentResponse
{

  /**
   * 
   * @var StoreTrans $Store_GetCurrentResult
   * @access public
   */
  public $Store_GetCurrentResult;

  /**
   * 
   * @param StoreTrans $Store_GetCurrentResult
   * @access public
   */
  public function __construct($Store_GetCurrentResult)
  {
    $this->Store_GetCurrentResult = $Store_GetCurrentResult;
  }

}

}
