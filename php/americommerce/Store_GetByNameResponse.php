<?php

if (!class_exists("Store_GetByNameResponse", false)) 
{
class Store_GetByNameResponse
{

  /**
   * 
   * @var StoreTrans $Store_GetByNameResult
   * @access public
   */
  public $Store_GetByNameResult;

  /**
   * 
   * @param StoreTrans $Store_GetByNameResult
   * @access public
   */
  public function __construct($Store_GetByNameResult)
  {
    $this->Store_GetByNameResult = $Store_GetByNameResult;
  }

}

}
